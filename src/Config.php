<?php


namespace App;

Class Config{

   
   static $facebookCredentials = [

       'verifyToken' => 'politricks',
<<<<<<< HEAD
       'accessToken' => 'EAALGjd6t0LkBACyiONdC4dtDQnKs82UUd8ZAH4M2DUL3XsTX3wdWUYqXtvKnjBVBnIedvppJBAPf0nlzPZCIZCZBPHp5nYr9vqR2vqq14qI0orHAeGwsZAJLeUPoRRAJYfJ22Mfq50I3pX5EGgsmDqfaDF9E6XT16rxijffMOJi62jsdAz6OX'

   ];

    
=======
       'accessToken' => 'EAALGjd6t0LkBAGyvY7WaDX9EyB0QsG2DcNOwZCgiQ41lU432WoxqEm5Flzmhmbt8dmQiAjmtf0r80xucnU7KDPSZCEmSZCIV5vhO1vuLH5rr7JQ0ZAtEXTa1NCxrloC9cBDjZARlmQ4JNa4lnhegIaEt28oAeh5OlJViCs9ZAlVoYj8pcFkIYM' 
      ];
>>>>>>> 68493c32a7ed566db683ce17785973f5cbbfb523
    static function getVerifyToken()
    {

    	return  Config::$facebookCredentials['verifyToken'];
    }

    static function getAccessToken()
    {

    	return  Config::$facebookCredentials['accessToken'];
    }

    




}
