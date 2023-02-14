<?php

namespace App\services\api\passengers;
use App\services\Api\UrlServices;

use Illuminate\Http\Request;

class AddPassengerServices{

    public function add(Request $request,$travel_id){
        $url=(new UrlServices())->getUrl();

        $client = new \GuzzleHttp\Client();
        $response = $client->post($url.'/api/add/passengers/'.$travel_id, [
            'headers' => ['Content-Type'=>'application/json'],
            'body'    => $request
        ]);



            return json_decode($response->getBody());
    }

}
