<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Passenger;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable=[
        'sub_agency_id',
        'travel_id',
        'passenger_id',
        'type'
    ];

    public function passenger():BelongsTo
    {
        return $this->belongsTo(Passenger::class);
    }
}
