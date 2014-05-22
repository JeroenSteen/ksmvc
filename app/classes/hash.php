<?php
	
class Hash{

	private static $crypt = PASSWORD_BCRYPT; //PASSWORD_DEFAULT
	private static $options = [
			'cost' => 10, //$2y$10
			'salt' => mcrypt_create_iv(22, MCRYPT_DEV_URANDOM)
			];
	
	public function Hash(){}
	
	public static make($pass){
		//Default encrypten met Bcrypt
		$hash = password_hash($pass, self::$crypt, self::$options);
	}
	
	public static verify(){
		//Check of pass matched met hash
		if(password_verify($pass, $hash) == 1){
		//Check of pass rehashed moet worden
			if(password_needs_rehash($hash, $crypt, $options) == 1){
				//Rehash
				$hash = password_hash($pass, $crypt, $options);
			}
		}

		//Toon resultaat
		echo $hash;
	}

}