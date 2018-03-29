<?php


namespace App;

Class Config{

   
   static $facebookCredentials = [

       'verifyToken' => 'politricks',
       'accessToken' => 'EAALGjd6t0LkBAGyvY7WaDX9EyB0QsG2DcNOwZCgiQ41lU432WoxqEm5Flzmhmbt8dmQiAjmtf0r80xucnU7KDPSZCEmSZCIV5vhO1vuLH5rr7JQ0ZAtEXTa1NCxrloC9cBDjZARlmQ4JNa4lnhegIaEt28oAeh5OlJViCs9ZAlVoYj8pcFkIYM'   
    static function getVerifyToken()
    {

    	return  Config::$facebookCredentials['verifyToken'];
    }

    static function getAccessToken()
    {

    	return  Config::$facebookCredentials['accessToken'];
    }

    




}
