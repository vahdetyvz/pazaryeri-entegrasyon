<?php
	namespace Vahdetyvz\PazaryeriEntegrasyon;
	use Vahdetyvz\PazaryeriEntegrasyon\Hepsiburada\Hepsiburada;
	class Pazaryerleri {
		public function __construct() {
			$hepsiburada = new Hepsiburada();
			echo $hepsiburada;
		}
	}