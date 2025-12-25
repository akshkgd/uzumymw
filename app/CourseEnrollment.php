<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CourseEnrollment extends Model
{
    Protected $dates = ['date', 'startDate', 'created_at'];
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
}
