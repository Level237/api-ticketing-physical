<?php

namespace App\Http\Controllers\Api;

use App\Models\Bus;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BusController extends Controller
{
    public function index(){

        $buse=Bus::all();

        return response()->json(['bus'=>$buse],200);
    }

    public function store(Request $request)
    {
        Bus::create([
            'immatriculation'=>$request->immatriculation,
            'number_of_places'=>$request->number_of_places
        ]);
        return response()->json(["bus creer avec success"],201);
    }
}
