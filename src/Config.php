<?php


namespace App;

Class Config{

   
   static $facebookCredentials = [

       'verifyToken' => 'politricks',
       'accessToken' => 'EAALGjd6t0LkBACKHWzgPzVgfHyZCP2BhMMi2CpXci08jWzNKqHiWiHjb2ugPMUaTWoid1ckvUzIAeMYKVtaTgLVCnQI8NcdWthlrS1TMfDqEVpDe3lDqQUOGJ42Cw2AwolZC7CNzcnQ56w5dbKU0BLieNeYcZBoJyvLXsGxlkm13zBLtigu' ];

    
    static function getVerifyToken()
    {

    	return  Config::$facebookCredentials['verifyToken'];
    }

    static function getAccessToken()
    {

    	return  Config::$facebookCredentials['accessToken'];
    }

    




}
