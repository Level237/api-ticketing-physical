<?php

namespace App\Http\Controllers\Api\User;

use App\Models\Ticket;
use App\Models\Passenger;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AddPassengerController extends Controller
{
    public function add(Request $request,$travel_id,$sub_agency_id){

        $PassengerData = $request->all();
        foreach($PassengerData['Passagers'] as  $key => $value){
            $passenger=new Passenger;
        $passenger->name=$value['name'];
        $passenger->type=$value['type'];
        $passenger->travel_id=$travel_id;
        $passenger->cni=$value['cni'];
        $passenger->telephone=$value['telephone'];
        $passenger->seatNumber=$value['seatNumber'];
        $passenger->isCheckPayment=$value['isCheckPayment'];
        $passenger->save();

        $ticket=new Ticket;
        $ticket->sub_agency_id=$sub_agency_id;
        $ticket->travel_id=$travel_id;
        $ticket->passenger_id=$passenger->id;
        $ticket->type=1;
        $ticket->save();
        }


        return response()->json(['message'=>"Passager ajoutée"],201);
    }
}
