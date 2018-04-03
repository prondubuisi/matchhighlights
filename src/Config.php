<?php


namespace App;

Class Config{

   
   static $facebookCredentials = [

       'verifyToken' => 'politricks',
       'accessToken' => 'EAALGjd6t0LkBACyiONdC4dtDQnKs82UUd8ZAH4M2DUL3XsTX3wdWUYqXtvKnjBVBnIedvppJBAPf0nlzPZCIZCZBPHp5nYr9vqR2vqq14qI0orHAeGwsZAJLeUPoRRAJYfJ22Mfq50I3pX5EGgsmDqfaDF9E6XT16rxijffMOJi62jsdAz6OX'

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