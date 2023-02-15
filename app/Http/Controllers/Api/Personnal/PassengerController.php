<?php

namespace App\Http\Controllers\Api\Personnal;

use App\Http\Controllers\Controller;
use App\Http\Requests\PassengerRequest;
use App\Models\Passenger;
use App\Models\Ticket;
use App\services\api\passengers\AddPassengerServices;
use Illuminate\Http\Request;

class PassengerController extends Controller
{
    public function index(){


    }

    public function store(PassengerRequest $request,$id,$sub_agency_id){



        $response = (new AddPassengerServices())->add($id,$request,$sub_agency_id);

        $passenger=new Passenger;
        $passenger->name=$request->name;
        $passenger->type=$request->type;
        $passenger->cni=$request->cni;
        $passenger->telephone=$request->telephone;
        $passenger->seatNumber=$response['place'];
        $passenger->travel_id=$id;
        $passenger->save();

        $ticket=new Ticket;
        $ticket->sub_agency_id=$sub_agency_id;
        $ticket->travel_id=$id;
        $ticket->passenger_id=$passenger->id;
        $ticket->type=1;
        $ticket->save();
        return $response;
    }
}
