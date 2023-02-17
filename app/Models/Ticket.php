<?php

namespace App\Models;

use App\Models\Bordereau;
use App\Models\Passenger;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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

    public function bordereau():HasMany{

        return $this->hasMany(Bordereau::class);
    }
}
