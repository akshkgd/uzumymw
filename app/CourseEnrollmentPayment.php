<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CourseEnrollmentPayment extends Model
{
    protected $table = 'course_enrollment_payments';

    protected $fillable = [
        'course_enrollment_id',
        'amount',
        'paid_at',
        'payment_method',
        'transaction_id',
        'invoice_id',
        'purpose',
        'is_gst_applicable',
        'remarks',
    ];

    protected $dates = ['paid_at'];

    public function enrollment()
    {
        return $this->belongsTo('App\CourseEnrollment', 'course_enrollment_id', 'id');
    }

    protected static function booted()
    {
        static::saved(function ($payment) {
            if ($payment->enrollment) {
                $payment->enrollment->syncPaymentSummary();
            }
        });

        static::deleted(function ($payment) {
            if ($payment->enrollment) {
                $payment->enrollment->syncPaymentSummary();
            }
        });
    }
}
