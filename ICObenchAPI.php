<?php

class ICObenchAPI {

	private $privateKey	= 'PRIVATE_KEY';
	private $publicKey	= 'PUBLIC_KEY';
	private $apiUrl		= 'https://icobench.com/api';
	public	$data		= [];
	public	$result;
	private $api		= '/general';

	function __construct($apiType) {
	   $this->api = $apiType;
	}
	
	// Set columns to update
	public function set($var,$val = ''){ $this->data[$var] = $val; }

	// UPDATE
	public function update(){ return $this->send('/update'); }

	// GET
	public function get(){ return $this->send('/get');	}

	// INSERT
	public function insert(){ return $this->send('/insert'); }

	// REMOVE
	public function remove(){ return $this->send('/remove'); }
	
	// Send and handle the response
	private function send($action){
		
		$dataJson = json_encode($this->data); 			
		$sig = base64_encode(hash_hmac('sha1', $dataJson, $this->privateKey, true));	
		
		$ch = curl_init($this->apiUrl . $this->api . $action);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                                                                     
		curl_setopt($ch, CURLOPT_POSTFIELDS, $dataJson);                                                                  
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
			'Content-Type: application/json',                                                                                
			'Content-Length: ' . strlen($dataJson),
			'X-ICObench-Key: ' . $this->publicKey,
			'X-ICObench-Sig: ' . $sig)
		);                                                                                                                   
																															 
		$reply = curl_exec($ch);
		$reply = json_decode($reply,true);

		if(isset($reply['error'])){
			$this->result = $reply['error'];
			return false;
		}else if(isset($reply['message'])){
			$this->result = $reply['message'];
			return true;
		}else if(isset($reply)){
			$this->result = json_encode($reply);
			return true;
		}else{
			$this->result = 'Unknown Error';
			return false;
		}
		
		// Destroy stack list
		unset($this->data);
	}

	// Returns results in JSON
	public function result(){
		return $this->result;
	}
}
?>
