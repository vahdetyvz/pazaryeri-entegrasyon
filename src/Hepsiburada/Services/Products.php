<?php 
	namespace Vahdetyvz\PazaryeriEntegrasyon\Hepsiburada\Products;
	class Products extends Hepsiburada {
		public $suburl = '/product/api/';
		public function __construct() {
			parent::__construct();
		}
		
		public function getCategories() {
			return $this->getRequest($this->url.$this->suburl.'categories/get-all-categories?leaf=true&status=ACTIVE&available=true&page=0&size=1000&version=1');
		}
	}