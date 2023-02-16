<?php

namespace App\services\api\passengers;
use App\services\api\UrlServices;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AddPassengerServices{

    public function add($travel_id,$request,$sub_agency_id){
        $url=(new UrlServices())->getUrl();

        $response=Http::post($url.'/api/add/passengers/'.$travel_id.'/'.$sub_agency_id,[
            'name'=>$request->name,
            'type'=>$request->type,
            'cni'=>$request->cni,
            'telephone'=>$request->telephone,
        ]);


            return $response;
    }

}
