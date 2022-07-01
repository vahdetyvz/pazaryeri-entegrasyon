<?php
	namespace Vahdetyvz\PazaryeriEntegrasyon;
	class Pazaryerleri {
		public function __autoload($class) {
			spl_autoload_register(function($class){
				echo $class;
				$prefix = 'TicaretPlus\\';
				$base_dir = __DIR__ . '/src/';
				$len = strlen($prefix);
				if (strncmp($prefix, $class, $len) !== 0){
					return;
				}
				$relative_class = substr($class, $len);
				$file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';
				if (file_exists($file))
					require_once $file;
			});
		}
		
		public function __construct() {
			
		}
	}