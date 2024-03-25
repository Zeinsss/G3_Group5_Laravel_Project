<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'services',
        'pricing',
        'notes'
    ];

    public function events()
    {
        return $this->hasMany(Event::class);
    }
}
