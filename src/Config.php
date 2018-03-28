<?php


namespace App;

Class Config{

   
   static $facebookCredentials = [

       'verifyToken' => 'politricks',
       'accessToken' => 'EAALGjd6t0LkBAKLO8atCBbftZBLOHHgNOIM8Ehfyr1j5GRQZCQ42YeaJBMly6Gt8A1bePwZC2n5Bbr6xkvzceLGar4u5KBwHdTDKK8tZAxkmZBmN2WNevfCQxzKbFaAy9N2Flv5WZAd4uZCbVx3oVK3TrISfVk7XyrsEnBuKI8B9RV35NN7d8ED' ];

    
    static function getVerifyToken()
    {

    	return  Config::$facebookCredentials['verifyToken'];
    }

    static function getAccessToken()
    {

    	return  Config::$facebookCredentials['accessToken'];
    }

    




}
