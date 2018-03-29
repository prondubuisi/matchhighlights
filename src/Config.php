<?php


namespace App;

Class Config{

   
   static $facebookCredentials = [

       'verifyToken' => 'politricks',
       'accessToken' => 'EAAD6lZCQiNrABAPZADOaEvn778JtVV9sbNTG7RZCF3zXPzDRhaNf5lQJfh9lHlIDtWKQgdZC8nGK7jjZCYENym7Fxj9oDMZBDae9vRFTkxMfKh7VZCPKZBTSn36AUf2MCIZBMN1YxzZCXKfmOYLRjnyP1mYhLsqreZA8dcrrDXiWG4EZC1SBe80yMxu4' ];

    
    static function getVerifyToken()
    {

    	return  Config::$facebookCredentials['verifyToken'];
    }

    static function getAccessToken()
    {

    	return  Config::$facebookCredentials['accessToken'];
    }

    




}
