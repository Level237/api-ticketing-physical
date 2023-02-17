<?php

namespace App\Models;

use App\Models\Ticket;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Bordereau extends Model
{
    use HasFactory;

    protected $fillable=[
        'ticket_id',
        'ticketAmount',
        'amountReimbursed'
    ];

    public function ticket():BelongsTo
    {
        return $this->belongsTo(Ticket::class);
    }
}
