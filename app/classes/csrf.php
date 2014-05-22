<?php

class CSRF{

	//https://www.owasp.org/index.php/Cross-Site_Request_Forgery_(CSRF)_Prevention_Cheat_Sheet
	
	public function CSRF(){
	}
	
	public static function token(){
		if(isset($_SERVER['HTTP_REFERER'])){
			$referer = $_SERVER['HTTP_REFERER'];
			
			//Bezoeker post vanaf een andere locatie
			if (!strpos($referer, URI) == 0) {
				var_dump($referer);
				echo "foei";
				return;
			}
		}
		return bin2hex(mcrypt_create_iv(22, MCRYPT_DEV_URANDOM));
	}
	
}