<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'time_from',
        'time_to',
        'car_id'
    ];

    public function room()
    {
        return $this->belongsTo(Car::class);
    }

    public function guests()
    {
        return $this->hasMany(Customer::class);
    }


    public $timestamps = false;

}
