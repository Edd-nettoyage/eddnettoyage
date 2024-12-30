<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Booking extends Model
{
    use HasFactory;


    protected $fillable = [
        'name',
        'email',
        'admin_response',
        'service_status',
        'urgency',
        'service_date',
        'service_time',
        'service_id',
        'service_location',
        'service_description'
    ];

    /**
     * Get the service associated with the Booking
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function service(): HasOne
    {
        return $this->hasOne(Service::class, 'id', 'service_id');

    }
}
