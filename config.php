<?php

class Config {
 
    public static $db  = array();
	public static $paths  = array();
	public static $route  = array();
	
	public function Config(){}
	
    public static function load() {
        require("db.php");
		require("paths.php");
		require("route.php");
		
		//Map voor Classes, Controllers, Libs, Models, Views
		define("APP", "app/");
		//Map voor Css, Js, Sass, Img
		define("PUBLIC", "public/");
    }
}

?>