<?php


namespace App;

Class Config{

   
   static $facebookCredentials = [

       'verifyToken' => 'politricks',
       'accessToken' => 'EAALGjd6t0LkBAFip2VoG1LJH2jNETHTHJZAP7TGsBqg7ioH9ECIqzZCEZCZBPkPBZCssvrUR1t57qRFcLth5Bjm16C61lOI2TNdyM407gtaB2EyvJJ2ykdQ4XpdU22A6KvUzKBkGz2NjqKLWdo45Mnp8u2HSOGKCwLKwYwthzdAZDZD'

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