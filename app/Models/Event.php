<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'event_name',
        'event_artists',
        'ticket_price',
        'banner_image',	
        'start_date',	
        'end_date',	
        'event_time'

    ];


}
