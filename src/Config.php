<?php


namespace App;

Class Config{

   
   static $facebookCredentials = [

       'verifyToken' => 'politricks',

       'accessToken' => 'EAALGjd6t0LkBADV9AX68BKjtCNZAFZAw6HrecFVKXOlxHppTayG5t2TefM684WiglkLCUqO5diblmJObuksgyluPI7ZAtIfzMegfkQ61riewBiJg82iUYAqD9ZB95fZAxOrFBa6277b3r80qATrPZCg8Wqdm7YrzSc52dNBacmkMGJjAAoZBnP7'

   ];

   
    static function getVerifyToken()
    {

    	return  Config::$facebookCredentials['verifyToken'];
    }

    static function getAccessToken()
    {

    	return  Config::$facebookCredentials['accessToken'];
    }

    




}
