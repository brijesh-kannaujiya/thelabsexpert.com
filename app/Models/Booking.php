<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    public $guarded = [];
    use HasFactory;

    public function patient()
    {
        return $this->belongsTo(Patient::class, 'patient_id', 'id')->withTrashed();
    }

    public function tests()
    {
        return $this->belongsToMany(Test::class, 'booking_tests', 'booking_id', 'test_id');
    }
    public function status()
    {
        // return $this->belongsToMany(BookingStatus::class, 'booking_statuses');
        return $this->belongsToMany(Status::class, 'booking_statuses', 'booking_id', 'status_id')
            ->orderByPivot('created_at', 'desc')
            ->withPivot('created_at', 'updated_at');
    }

    public function paymentMethod()
    {
        return $this->belongsTo(PaymentMethod::class, 'payment_method_id', 'id');
    }
}
