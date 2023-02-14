<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Ticket;

class Passenger extends Model
{
    use HasFactory;

    protected $fillable=[
        'name',
        'type',
        'seatNumber',
        'travel_id',
        'cni',
        'telephone'
    ];

    public function tickets():HasMany
    {
        return $this->hasMany(Ticket::class);
    }
}
