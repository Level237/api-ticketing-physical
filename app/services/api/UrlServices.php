<?php

namespace App\services\api;

class UrlServices{

    public static $url="http://api.mykipart.com";

    public static function getUrl(){
        return self::$url;
    }
}
