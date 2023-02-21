<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Bordereau;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
}
