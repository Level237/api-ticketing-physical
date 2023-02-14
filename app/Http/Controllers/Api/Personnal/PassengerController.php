<?php

namespace App\Http\Controllers\Api\Personnal;

use App\Http\Controllers\Controller;
use App\Http\Requests\PassengerRequest;
use App\Models\Passenger;
use App\services\api\passengers\AddPassengerServices;
use Illuminate\Http\Request;

class PassengerController extends Controller
{
    public function index(){


    }

    public function store(PassengerRequest $request,$id){



        $response = (new AddPassengerServices())->add($id,$request);

        $passenger=new Passenger;
        $passenger->name=$request->name;
        $passenger->type=$request->type;
        $passenger->travel_id=$request->travel_id;
        $passenger->cni=$request->cni;
        $passenger->telephone=$request->telephone;
        $passenger->seatNumber=$response['place'];
        $passenger->travel_id=$id;
        $passenger->save();
        return $response;
    }
}
