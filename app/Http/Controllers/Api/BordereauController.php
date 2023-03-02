<?php

namespace App\Http\Controllers\Api;

use App\Models\Ticket;
use App\Models\Bordereau;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class BordereauController extends Controller
{
    public function all($id,$travel_id){

        $bordereau=DB::table('tickets')
        ->join('bordereaus','tickets.id', '=','bordereaus.ticket_id')
        ->join('passengers','passengers.id', '=','tickets.passenger_id')
        ->select('bordereaus.id','bordereaus.amountReimbursed','tickets.type','passengers.name','tickets.travel_id','bordereaus.ticketAmount')
        ->where('tickets.sub_agency_id','=',$id)
        ->where('tickets.travel_id','=',$travel_id)
        ->get();
        return $bordereau;
    }

    public function addBordereau($amount,$amountReimbursed,$sub_agency_id,$travel_id,$passenger_id){

        $ticket=new Ticket;
        $ticket->sub_agency_id=$sub_agency_id;
        $ticket->travel_id=$travel_id;
        $ticket->passenger_id=$passenger_id;
        $ticket->type=1;
        $ticket->save();

        $bordereau=new Bordereau;
        $bordereau->ticket_id=$ticket->id;
        $bordereau->ticketAmount=$amount;
        $bordereau->amountReimbursed=$amountReimbursed;
        $bordereau->save();

        return response()->json(['message'=>"bordereau ajoutée avec success"],201);
    }
}
