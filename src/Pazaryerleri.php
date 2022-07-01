<?php
	namespace Vahdetyvz/PazaryeroEntegrasyon;
	class Pazaryerleri {
		public function __autoload($class) {
			spl_autoload_register(function($class){
				$prefix = 'TicaretPlus\\';
				$base_dir = __DIR__ . '/src/libraries/';
				$len = strlen($prefix);
				if (strncmp($prefix, $class, $len) !== 0){
					return;
				}
				$relative_class = substr($class, $len);
				$file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';
				if (file_exists($file))
					echo $file;
					require_once $file;
			});
		}
		
		public function __construct() {
			$trendyol = new Trendyol/Trendyol();
		}
	}