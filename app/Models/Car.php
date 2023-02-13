<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $fillable = [
        'brand',
        'model',
        'year_of_car',
        'price_of_car'
    ];
    protected $guarded = [
        'id',
    ];

    public function reservation(){
        return $this->hasMany(Reservation::class);
    }
    public $timestamps = false;
}
