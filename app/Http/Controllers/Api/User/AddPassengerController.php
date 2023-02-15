<?php

namespace App\Http\Controllers\Api\User;

use App\Http\Controllers\Controller;
use App\Models\Passenger;
use Illuminate\Http\Request;

class AddPassengerController extends Controller
{
    public function add($cni,$name,$type,$telephone,$seatNumber,$isCheckPayment,$travel_id){

        $passenger=new Passenger;
        $passenger->name=$name;
        $passenger->type=$type;
        $passenger->travel_id=$travel_id;
        $passenger->cni=$cni;
        $passenger->telephone=$telephone;
        $passenger->seatNumber=$seatNumber;
        $passenger->isCheckPayment=$isCheckPayment;
        $passenger->save();

        return response()->json(['message'=>"Passager ajoutée"],200);
    }
}
