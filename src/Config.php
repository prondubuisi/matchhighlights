<?php


namespace App;

Class Config{

   
   static $facebookCredentials = [

       'verifyToken' => 'politricks',
       'accessToken' => 'EAALGjd6t0LkBAA9GJfje9FJGufdK7FOlrwGLGIzYyv6oRgafVcZB1Q8AJ9BvduskZC9MumsKIc09uSpItz0kXxvKiPiJL9RIVumSffrShvpawZBk48EwJcheGW6gLgrm53qEVG70oKOQ6X4ZCdoVJbVymGihzmRpZCnjzFiIZBT6w0AIW4ZBn7d' ];

    
    static function getVerifyToken()
    {

    	return  Config::$facebookCredentials['verifyToken'];
    }

    static function getAccessToken()
    {

    	return  Config::$facebookCredentials['accessToken'];
    }

    




}
