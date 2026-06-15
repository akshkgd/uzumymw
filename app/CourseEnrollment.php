<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CourseEnrollment extends Model
{
    protected $dates = ['date', 'startDate', 'created_at', 'startFrom'];
    protected $fillable = [
        'status',
        'hasPaid',
        'amountPaid',
        'amountPayable',
        'paidAt',
        'paymentMethod',
        'transactionId',
        'invoiceId',
        'certificateFee',  // Add this for VIP payments
        'userId',
        'batchId',
        'email',
        'date',
        'startDate',
        'override_access_days',
        'startFrom',
        // Add any other fields you might update
    ];
    public function batch(){

        return $this->belongsTo ('App\Batch', 'batchId', 'id');
    }
    public function students(){

        return $this->belongsTo ('App\User', 'userId', 'id');
    }
    public function routeNotificationForMail()
    {
        return $this->email;
    }

    public function payments()
    {
        return $this->hasMany('App\CourseEnrollmentPayment', 'course_enrollment_id', 'id');
    }

    /**
     * Accessor to get the amount payable in Rupees.
     * Handles cases where amountPayable is stored in Paisa (e.g. 799900) or Rupees (e.g. 7999).
     */
    public function getPayableInRupeesAttribute()
    {
        $payable = $this->amountPayable ?? 0;
        $price = $this->price ?? 0;

        // If price is set, use it to scale. A value in Paisa is 100 times the Rupee value.
        // Even with a very large discount (e.g., up to 90% off), the Paisa value
        // will be at least 10 times the original price.
        // A value in Rupees will never exceed the price * 1.5.
        // Therefore, a threshold of 2 * price is an extremely safe boundary.
        if ($price > 0 && $payable >= $price * 2) {
            return $payable / 100;
        }

        // Fallback for cases where price is not set:
        // Since typical course prices/payments are above 50 Rupees, we can use 5000 Paisa (50 Rupees)
        // as the boundary. Any value >= 5000 is treated as Paisa.
        if ($payable >= 5000) {
            return $payable / 100;
        }

        return $payable;
    }

    /**
     * Checks if the enrollment is partially paid.
     * Only sums transactions where purpose is 'enrollment' to avoid interference from renewal payments.
     */
    public function partiallyPaid()
    {
        $enrollmentPaid = $this->payments()
            ->where('purpose', 'enrollment')
            ->sum('amount') / 100; // Converted from paisa to rupees
        
        return $enrollmentPaid > 0 && $enrollmentPaid < $this->payable_in_rupees;
    }

    /**
     * Scope a query to only include partially paid enrollments.
     */
    public function scopePartiallyPaid($query)
    {
        return $query->whereHas('payments', function ($q) {
            $q->where('purpose', 'enrollment');
        })->where(function ($q) {
            $q->whereColumn('amountPaid', '<', \DB::raw('amountPayable * 100'))
              ->orWhere(function ($sub) {
                  $sub->where('amountPayable', '>', 50000)
                      ->whereColumn('amountPaid', '<', 'amountPayable');
              });
        });
    }

    /**
     * Recalculates all transaction summaries and updates the parent enrollment record.
     */
    public function syncPaymentSummary()
    {
        $payments = $this->payments()->orderBy('paid_at', 'asc')->get();

        if ($payments->isEmpty()) {
            $this->update([
                'amountPaid' => 0,
                'hasPaid' => ($this->amountPayable == 0) ? 1 : 0,
                'paidAt' => null,
                'transactionId' => null,
                'invoiceId' => null,
            ]);
            return;
        }

        $totalPaidPaisa = $payments->sum('amount');
        $latestPayment = $payments->last();
        $firstPayment = $payments->first();

        $this->update([
            'amountPaid'    => $totalPaidPaisa,
            'hasPaid'       => ($totalPaidPaisa > 0 || $this->amountPayable == 0) ? 1 : 0,
            'paidAt'        => $firstPayment->paid_at,
            'transactionId' => $latestPayment->transaction_id,
            'invoiceId'     => $latestPayment->invoice_id,
        ]);
    }
}
