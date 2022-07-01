<?php
	namespace Vahdetyvz\PazaryeriEntegrasyon\Helpers;
	class Curl {
		public function __construct() {
			
		}
		
		public function getPost($url,$data) { 
			$curl = curl_init($url); 
			curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); 
			curl_setopt($curl, CURLOPT_POST, true); 
			curl_setopt($curl, CURLOPT_POSTFIELDS, $data); 
			$header = array(     
				'Authorization: Basic '. base64_encode($this->username.':'.$this->password), 
				'Content-Type: application/xml' 
			); 
			curl_setopt($curl, CURLOPT_HTTPHEADER, $header); 
			echo $curl_response = curl_exec($curl);  
		}
		
		public function getRequest($url) { 
			$curl = curl_init($url); 
			curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); 
			curl_setopt($curl, CURLOPT_POST, false); 
			$header = array(     
				'Authorization: Basic '. base64_encode($this->username.':'.$this->password), 
				'Content-Type: application/xml' 
			); 
			curl_setopt($curl, CURLOPT_HTTPHEADER, $header); 
			echo $curl_response = curl_exec($curl);  
		}
	}