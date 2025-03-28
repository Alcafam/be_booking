<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'event_id',
        'reserve_spot',
    ];

    // Relationship to the Event model
    public function event()
    {
        return $this->belongsTo(Event::class);
    }

    // Relationship to the User model
    public function user()
    {
        return $this->belongsTo(User::class);
    } 
}
