<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class event extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'date',
        'time',
        'description',
        'client_id',
        'budget',
        'status',
        'vendor_id',
        'venue_id',
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function vendor()
    {
        return $this->belongsTo(Vendor::class);
    }

    public function venue()
    {
        return $this->belongsTo(Venue::class);
    }   
}
