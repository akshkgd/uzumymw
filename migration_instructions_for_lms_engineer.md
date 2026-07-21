# Technical Integration Guide: User Migration API Endpoint

**Target Audience**: New LMS Backend Engineer  
**Sender**: Legacy Codekaro Admin Queue Migration System  
**Target Endpoint**: `POST https://api.codekaro.in/migration/users`

---

## 1. Overview
The legacy Codekaro system is transmitting user accounts (~100,000+ records) to the new LMS platform via a chunked, queue-based transmission system.

Data is sent in sequential HTTP `POST` JSON payloads containing batch slices (default: **1,000 records per request**, configurable up to 2,000).

---

## 2. Request Specification

### HTTP Headers
```http
POST /migration/users HTTP/1.1
Host: api.codekaro.in
Content-Type: application/json
Accept: application/json
Authorization: Bearer <OPTIONAL_API_KEY>
X-API-Key: <OPTIONAL_API_KEY>
```

---

## 3. JSON Payload Schema

### Top-Level Envelope
| Field | Type | Description |
|---|---|---|
| `entity` | `string` | Always `"users"` |
| `batch_index` | `number` | 1-based index of current chunk batch |
| `chunk_size` | `number` | Number of items in current chunk (e.g. 1000) |
| `total_records` | `number` | Total user records being migrated (~100,000+) |
| `data` | `Array<User>` | Array of user objects |

### User Record Schema (`data[]`)
| Field Name | Type | Nullable | Description / Notes |
|---|---|---|---|
| `id` | `integer` | No | Legacy User ID (Primary Key) |
| `name` | `string` | No | Full Name |
| `google_id` | `string` | Yes | Google OAuth ID |
| `email` | `string` | No | Unique Email address |
| `is_verified` | `integer` | No | `1` = Email verified, `0` = Unverified |
| `email_verified_at` | `string (ISO 8601)` | Yes | Verification timestamp |
| `user_name` | `string` | Yes | Legacy Username |
| `mobile` | `string` | Yes | Mobile Number |
| `college` | `string` | Yes | College / Institution |
| `course` | `string` | Yes | Academic Degree / Course |
| `gender` | `string` | Yes | Gender (`"male"`, `"female"`, etc.) |
| `role` | `integer` | No | `0` = Student, `1` = Teacher / Admin |
| `avatar` | `string` | No | Profile Avatar URL |
| `status` | `integer` | No | `1` = Active, `0` = Deactivated / Banned |
| `coupan` | `string` | Yes | Referral / Coupon code |
| `lastActivity` | `string (ISO 8601)` | Yes | Last activity timestamp |
| `bio` | `string` | Yes | User biography |
| `telegramId` | `string` | Yes | Telegram handle / ID |
| `xp` | `integer` | No | Gamification XP score (default `0`) |
| `current_streak` | `integer` | No | Current daily streak count |
| `longest_streak` | `integer` | No | Best historical daily streak count |
| `last_activity_date` | `string (YYYY-MM-DD)` | Yes | Last streak activity date |
| `created_at` | `string (ISO 8601)` | No | Account creation timestamp |
| `updated_at` | `string (ISO 8601)` | No | Account update timestamp |

> [!NOTE]
> **Stripped / Omitted Fields**: `field1` through `field5` as well as password hashes (`password`, `remember_token`) have been excluded for security and clean migration.

---

## 4. Sample HTTP Request Body

```json
{
  "entity": "users",
  "batch_index": 1,
  "chunk_size": 1000,
  "total_records": 105432,
  "data": [
    {
      "id": 101,
      "name": "Ananya Sharma",
      "google_id": "109876543210987654321",
      "email": "ananya.sharma@example.com",
      "is_verified": 1,
      "email_verified_at": "2024-03-15T10:30:00.000000Z",
      "user_name": "ananya_s",
      "mobile": "+919876543210",
      "college": "Delhi Technological University",
      "course": "B.Tech Computer Science",
      "gender": "female",
      "role": 0,
      "avatar": "https://codekaro.in/assets/img/mask.svg",
      "status": 1,
      "coupan": "ANANYA10",
      "lastActivity": "2026-07-21T08:15:00.000000Z",
      "bio": "Aspiring Fullstack Developer",
      "telegramId": "@ananyasharma",
      "xp": 1250,
      "current_streak": 5,
      "longest_streak": 14,
      "last_activity_date": "2026-07-20",
      "created_at": "2024-03-15T10:30:00.000000Z",
      "updated_at": "2026-07-21T08:15:00.000000Z"
    }
  ]
}
```

---

## 5. Requirements for the Receiving LMS Endpoint

1. **UPSERT Strategy (Idempotency)**:
   - Perform an **UPSERT** operation matching on `id` or `email` (e.g. `INSERT ... ON CONFLICT (email) DO UPDATE`).
   - This prevents duplicate records if a chunk is retried due to network interruption.

2. **Expected Response Format**:
   - Return `HTTP 200 OK` (or `201 Created`) with JSON:
   ```json
   {
     "success": true,
     "processed": 1000,
     "message": "Users chunk 1 processed successfully."
   }
   ```

3. **Performance Optimization**:
   - Wrap chunk insertion inside a single DB transaction / bulk insert query (e.g. Drizzle / Prisma `createMany` or PostgreSQL `INSERT INTO users (...) VALUES ...`).
   - Process chunk requests within **< 2-3 seconds** per batch.
