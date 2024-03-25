<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venue extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'address',
        'capacity',
        'is_available',
        'rental_fee',
        'available_date',
        'notes'
    ];

    public function events()
    {
        return $this->hasMany(Event::class);
    }
}
