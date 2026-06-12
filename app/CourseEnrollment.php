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

        if ($price > 0 && $payable >= $price * 50) {
            return $payable / 100;
        }

        if ($payable > 50000) {
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
                'hasPaid' => 0,
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
            'hasPaid'       => $totalPaidPaisa > 0 ? 1 : 0,
            'paidAt'        => $firstPayment->paid_at,
            'transactionId' => $latestPayment->transaction_id,
            'invoiceId'     => $latestPayment->invoice_id,
        ]);
    }
}
