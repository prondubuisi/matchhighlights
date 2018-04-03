<?php

namespace App;
use App\Config;

class SendMessage{



	public $userID;
	public $accessToken;
    public $input;

	function __construct($input)
	{

         $this->userID = $input['entry'][0]['messaging'][0]['sender']['id'];
         $this->accessToken = Config::getAccessToken();
         $this->input = $input;

	}


    public function text($text)
    {

      
	    $userID = $this->userID;
	   
	    $response = [

	     'recipient' => [ 'id' => $userID ],

	     'message' => [ 'text' => $text ]

	       ];

      $this->curlResponse($response);

   
    }
	
    public function carousel() {
	    
	      $userID = $this->userID;
    
    	$response = [
  "recipient"=>[
    "id"=> $userID
  ],
  "message"=>[
    "attachment"=>[
      "type"=>"template",
      "payload"=>[
        "template_type"=>"generic",
        "elements"=>[
           [
            "title"=>"Welcome!",
            "image_url"=>"https=>//petersfancybrownhats.com/company_image.png",
            "subtitle"=>"We have the right hat for everyone.",
            "default_action"=> [
              "type"=> "web_url",
              "url"=> "https=>//petersfancybrownhats.com/view?item=103",
              "messenger_extensions"=> false,
              "webview_height_ratio"=> "tall",
              "fallback_url"=> "https=>//petersfancybrownhats.com/"
            ],
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"https=>//petersfancybrownhats.com",
                "title"=>"View Website"
              ],[
                "type"=>"postback",
                "title"=>"Start Chatting",
                "payload"=>"DEVELOPER_DEFINED_PAYLOAD"
              ]              
            ]      
          ]
        ]
      ]
    ]
  ]
];
    
	    $this->curlResponse($response);
    
    }

    public function curlResponse($response)
    {
        $accessToken = $this->accessToken;
	    $input=  $this->input;
	
	    $curl = curl_init('https://graph.facebook.com/v2.6/me/messages?access_token='.$accessToken);
	    curl_setopt($curl, CURLOPT_POST, 1);
	    curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($response));
	    curl_setopt($curl, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);



        if(!empty($input))
        {
	        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
	        $result = curl_exec($curl);
         }

        curl_close($curl); 
	}








}
