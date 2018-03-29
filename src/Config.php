<?php


namespace App;

Class Config{

   
   static $facebookCredentials = [

       'verifyToken' => 'politricks',
       'accessToken' => 'EAALGjd6t0LkBACwNwiP7QGeOBttMq6Tz8MOnZAaoWPZAlyf6R4ez7AJCIgYZBIZB8VtK1Po0Es30w4CIZCOf5rPqTZBQPs13tL2uRjmZCc9azTM3rnFaehAaibDOrJRKxUbzag2EpRrZAWmrr4hZAjRtMqYRiJbmoalfnIP6XxMKVJjTe9bWR5Xt1' ];

    
    static function getVerifyToken()
    {

    	return  Config::$facebookCredentials['verifyToken'];
    }

    static function getAccessToken()
    {

    	return  Config::$facebookCredentials['accessToken'];
    }

    




}
