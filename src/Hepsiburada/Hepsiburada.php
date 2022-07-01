<?php
	namespace Vahdetyvz\PazaryeriEntegrasyon\Hepsiburada;
	use Vahdetyvz\PazaryeriEntegrasyon\Helpers\Curl;
	class Hepsiburada {
		public $url;
		public $username;
		public $password;
		public $test = true;
		public $hepsiburada;
		public $curl = new Curl();
		public function __construct($_username,$_password,$_test = true) {
			if($_test) {
				$this->url = 'https://mpop-sit.hepsiburada.com';
			}else {
				$this->url = 'https://mpop.hepsiburada.com';
			}
			
			$this->username = $_username;
			$this->password = $_password;
			$this->test = $_test;
		}
	}