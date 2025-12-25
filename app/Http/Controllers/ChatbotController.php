<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\CourseEnrollment;
use App\BatchContent;
use App\BatchSection;
use App\WorkshopEnrollment;
use App\CourseProgress;
use Carbon\Carbon;
use App\Workshop;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Batch;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Contracts\Encryption\DecryptException;
use Jenssegers\Agent\Agent;
use Illuminate\Support\Facades\DB;
use PDF;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use GuzzleHttp\Client;

class ChatbotController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'verified', 'active']);
    }
    private $faqs = [
        // ACCOUNT & LOGIN
        "reset password|change password|forgot password" => "Go to Dashboard → Profile → Change Password. If you're logged out, use 'Forgot Password' on the login page: https://codekaro.in/password/reset",
        "can't login|login issue|login not working" => "First, try resetting your password. If that doesn't work, clear your browser cache or try a different browser. Still stuck? Check if your account is verified.",
        "email verification|verify email|didn't get verification email" => "Check your spam folder first. Still nothing? Go to your profile and click 'Resend Verification Email'.",
        "update profile|change email|change name" => "Go to Dashboard → Profile. You can update your name and other details there. For email changes, contact support as it affects your login.",
        
        // ENROLLMENT & COURSES
        "enrolled courses|my courses|where are my courses" => "Check Dashboard → My Courses. You'll see all courses you're enrolled in.",
        "course not showing|can't see course|missing course" => "Make sure payment is completed and your enrollment is active. If yes, refresh the page. Still missing? Your enrollment might be pending verification.",
        "join course|enroll in course|how to enroll" => "Browse courses, click on the one you want, then click 'Enroll Now'. Complete payment to get access.",
        "course access|when do i get access|course locked" => "You get instant access after successful payment. If you've paid but can't access, check your payment status in Dashboard → Payments.",
        "batch timing|class schedule|when are classes" => "Each course page shows its schedule. For enrolled courses, check Dashboard → My Courses → [Course Name] for detailed timings.",
        "switch batch|change batch|different batch" => "Contact support with your course name and preferred batch. We'll check availability and help you switch.",
        
        // PAYMENT & REFUND
        "payment failed|payment not working|payment error" => "Try a different payment method or card. Clear browser cache and try again. If it still fails, take a screenshot of the error and contact support.",
        "refund|money back|cancel enrollment" => "Refunds are processed as per the refund policy shown on the course page. Contact support with your enrollment ID for refund requests.",
        "payment proof|invoice|receipt" => "Check Dashboard → Payments. You can download your invoice from there.",
        "discount|coupon code|promo code" => "Apply coupon codes at checkout. If a code isn't working, it might be expired or not applicable to your course.",
        
        // COURSE CONTENT & PROGRESS
        "video not playing|can't watch video|video error" => "Check your internet connection. Try a different browser or disable browser extensions. Still not working? The video might still be processing — wait 10 minutes and refresh.",
        "download content|can i download|offline access" => "Some materials are downloadable — look for the download icon. Videos are stream-only for security.",
        "progress not saving|progress lost|tracking issue" => "Make sure you're logged in. Progress saves automatically when you complete sections. If it's not saving, try clearing cache or use a different browser.",
        "certificate|completion certificate|course certificate|get certificate|download certificate" => "Certificate availability depends on your course. Check the enrollment data above for your specific course certificate status and URL.",
        
        // GROUP & COMMUNITY
        "group link|join group|whatsapp group|telegram group|community link" => "Check the enrollment data above for your course's WhatsApp Group Link. If it shows 'Not available', the group isn't set up yet for that course.",
        "no group link|link not working|can't join group" => "If the group link isn't available in your enrollment data, it means it's not set up for your course yet. Contact support@codekaro.in with your course name.",
        
        // TECHNICAL ISSUES
        "site not loading|website down|page not working" => "Try clearing your browser cache or use an incognito window. Still down? It might be temporary maintenance — try again in a few minutes.",
        "mobile app|app not working|download app" => "We currently don't have a mobile app, but our website is mobile-friendly. Use any browser on your phone.",
        
        // GENERAL SUPPORT
        "contact support|talk to human|support email|support number" => "Email: support@codekaro.in. Response time is usually within 24 hours on weekdays.",
        "business hours|support hours|when is support available" => "Our team is available Monday to Friday, 9 AM to 6 PM IST. Emails sent outside these hours will be answered the next working day.",
    ];

    public function index()
    {
        return view('students.chatbot');
    }

    public function chat(Request $request)
    {
        try {
            $message = $request->input('message');
            $history = $request->input('history', []); // Get conversation history
            
            if (empty($message)) {
                return response()->json([
                    'success' => false,
                    'reply' => 'Please provide a message.'
                ], 400);
            }
            
            // Check if API key exists
            $apiKey = env('OPENROUTER_API_KEY');
            if (empty($apiKey)) {
                Log::error('OpenRouter API key not found in .env file');
                return response()->json([
                    'success' => false,
                    'reply' => 'API key not configured. Please contact administrator.'
                ], 500);
            }
            
            // Prepare enrollment context for the AI
            $user = auth()->user();
            $enrollmentContext = "";
            
            if ($user) {
                $enrollments = CourseEnrollment::where('userId', $user->id)
                    ->where('status', 1)
                    ->where('hasPaid', 1)
                    ->with(['batch' => function($query) {
                        $query->select('id', 'topicId', 'name', 'type', 'status', 'groupLink', 'groupLink2');
                    }])
                    ->latest()
                    ->get();
                
                if ($enrollments->count() > 0) {
                    $enrollmentContext = "\n\nUser's Current Enrollments:\n";
                    foreach ($enrollments as $index => $enrollment) {
                        $enrollmentContext .= ($index + 1) . ". ";
                        if ($enrollment->batch) {
                            $courseName = $enrollment->batch->name;
                            $topicId = $enrollment->batch->topicId;
                            $batchStatus = $enrollment->batch->status;
                            $certificateId = $enrollment->certificateId ?? null;
                            $enrollmentDate = Carbon::parse($enrollment->created_at);
                            $oneMonthAgo = Carbon::now()->subMonth();
                            
                            $enrollmentContext .= "Course: " . $courseName . "\n";
                            $enrollmentContext .= "   Topic ID: " . $topicId . "\n";
                            $enrollmentContext .= "   Type: " . $enrollment->batch->type . "\n";
                            $enrollmentContext .= "   Batch Status: " . $batchStatus . " (1=Active, 2=Upcoming, 3=Completed)\n";
                            $enrollmentContext .= "   Enrolled On: " . $enrollmentDate->format('Y-m-d') . "\n";
                            $enrollmentContext .= "   Enrollment Age: " . ($enrollmentDate->lte($oneMonthAgo) ? 'More than 1 month' : 'Less than 1 month') . "\n";
                            
                            // Certificate logic
                            if ($certificateId) {
                                $canGetCertificate = false;
                                $certificateNote = "";
                                
                                if ($topicId == 100) {
                                    // For topicId 100, check if batch is completed
                                    if ($batchStatus == 3) {
                                        $canGetCertificate = true;
                                        $certificateNote = "Certificate Available";
                                    } else {
                                        $certificateNote = "Certificate will be available after course completion";
                                    }
                                } else {
                                    // For other topicIds, check if enrolled for at least 1 month
                                    if ($enrollmentDate->lte($oneMonthAgo)) {
                                        $canGetCertificate = true;
                                        $certificateNote = "Certificate Available";
                                    } else {
                                        $certificateNote = "Certificate will be available after 1 month of enrollment";
                                    }
                                }
                                
                                $enrollmentContext .= "   Certificate ID: " . $certificateId . "\n";
                                $enrollmentContext .= "   Certificate Status: " . $certificateNote . "\n";
                                if ($canGetCertificate) {
                                    $enrollmentContext .= "   Certificate URL: https://codekaro.in/course-certificate/" . $certificateId . "\n";
                                }
                            } else {
                                $enrollmentContext .= "   Certificate: Not available for this course\n";
                            }
                            
                            // WhatsApp group link
                            if ($enrollment->batch->groupLink) {
                                $enrollmentContext .= "   WhatsApp Group Link: " . $enrollment->batch->groupLink . "\n";
                            } else {
                                $enrollmentContext .= "   WhatsApp Group Link: Not available\n";
                            }
                        }
                        $enrollmentContext .= "\n";
                    }
                } else {
                    $enrollmentContext = "\n\nNote: User has no active enrollments.\n";
                }
            }
            
            // Prepare system prompt and FAQ context for the AI
            $userName = $user->name ?? 'there';
            $firstName = explode(' ', $userName)[0];
            
            $systemPrompt = "You are a human support executive for CodeKaro, an LMS platform.\n\n";
            
            $systemPrompt .= "RULES:\n";
            $systemPrompt .= "• Be direct - just answer or ask (no 'I see', 'Got it', 'I understand', 'Let me help')\n";
            $systemPrompt .= "• Keep replies short (2-3 sentences max)\n";
            $systemPrompt .= "• No filler phrases ('happy learning', 'sure thing', 'feel free')\n";
            $systemPrompt .= "• Use first name in follow-ups: " . $firstName . "\n";
            $systemPrompt .= "• Match FAQ keywords (separated by |) as synonyms\n";
            $systemPrompt .= "• Never show system errors - give workarounds\n";
            $systemPrompt .= "• If unknown: 'I don't have that info. Email support@codekaro.in'\n\n";
            
            $systemPrompt .= "EXAMPLES:\n";
            $systemPrompt .= "❌ 'I see you're trying to...'\n";
            $systemPrompt .= "✅ 'Which course's certificate, " . $firstName . "? How to CSS or Fullstack 2.0?'\n\n";
            $systemPrompt .= "❌ 'Got it—you're having trouble...'\n";
            $systemPrompt .= "✅ 'Check your internet and try another browser. Still stuck? Wait 10 min and refresh.'\n\n";
            
            $systemPrompt .= "---\nKNOWLEDGE BASE:\n\n";
            
            foreach ($this->faqs as $question => $answer) {
                $systemPrompt .= "Q: $question\n";
                $systemPrompt .= "A: $answer\n\n";
            }
            
            // Add enrollment context
            if (!empty($enrollmentContext)) {
                $systemPrompt .= "---\nUSER ENROLLMENTS:\n";
                $systemPrompt .= $enrollmentContext;
                $systemPrompt .= "---\n\n";
                $systemPrompt .= "CERTIFICATE/GROUP LINK:\n";
                $systemPrompt .= "• Check enrollment data for 'Certificate Status' or 'WhatsApp Group Link'\n";
                $systemPrompt .= "• If available, provide URL/link directly\n";
                $systemPrompt .= "• If multiple courses, ask: 'Which course, " . $firstName . "? [Course 1] or [Course 2]?'\n";
                $systemPrompt .= "• If not available, explain when they'll get it\n\n";
            }

            // Build messages array with system prompt and conversation history
            $messages = [
                [
                    'role' => 'system',
                    'content' => $systemPrompt
                ]
            ];
            
            // Add conversation history if exists
            if (!empty($history) && is_array($history)) {
                foreach ($history as $msg) {
                    if (isset($msg['role']) && isset($msg['content'])) {
                        $messages[] = [
                            'role' => $msg['role'],
                            'content' => $msg['content']
                        ];
                    }
                }
            }
            
            // Add current user message
            $messages[] = [
                'role' => 'user',
                'content' => $message
            ];

            // Make API request to OpenRouter
            $client = new \GuzzleHttp\Client();
            $response = $client->post('https://openrouter.ai/api/v1/chat/completions', [
                'headers' => [
                    'Authorization' => 'Bearer ' . $apiKey,
                    'Content-Type' => 'application/json',
                ],
                'json' => [
                    'model' => 'openai/gpt-4o-mini',
                    'messages' => $messages
                ],
                'timeout' => 30,
            ]);

            $data = json_decode($response->getBody(), true);
            
            if (isset($data['choices'][0]['message']['content'])) {
                return response()->json([
                    'success' => true,
                    'reply' => $data['choices'][0]['message']['content']
                ]);
            }

            Log::error('Invalid response from OpenRouter', ['data' => $data]);
            return response()->json([
                'success' => false,
                'reply' => 'Sorry, I received an invalid response. Please try again.'
            ], 500);

        } catch (\GuzzleHttp\Exception\RequestException $e) {
            Log::error('OpenRouter API Request Error: ' . $e->getMessage());
            
            return response()->json([
                'success' => false,
                'reply' => 'Sorry, I could not connect to the AI service. Please try again later.'
            ], 500);
            
        } catch (\Exception $e) {
            Log::error('Chat Error: ' . $e->getMessage());
            Log::error($e->getTraceAsString());
            
            return response()->json([
                'success' => false,
                'reply' => 'Sorry, an unexpected error occurred. Please try again.'
            ], 500);
        }
    }
}

