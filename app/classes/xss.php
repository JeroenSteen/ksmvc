<?php

class XSS{
	
	//https://www.owasp.org/index.php/XSS_(Cross_Site_Scripting)_Prevention_Cheat_Sheet
	
	public function XSS(){
	}
	
	public static function escape($input){
		return htmlentities($input);
	}
	
	
}