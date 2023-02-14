<?php

namespace App\Http\Controllers\Api\Personnal;

use App\Http\Controllers\Controller;
use App\Http\Requests\PassengerRequest;
use App\Models\Passenger;
use Illuminate\Http\Request;

class PassengerController extends Controller
{
    public function index(){


    }

    public function store(PassengerRequest $request){

        $passenger=new Passenger;
        $passenger->name=$request->name;
        $passenger->type=$request->type;
        $passenger->type=$request->type;
    }
}
