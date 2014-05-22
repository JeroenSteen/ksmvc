<?php

class Config {
 
    public static $db  = array();
	public static $paths  = array();
	public static $route  = array();
	
	public function Config(){}
	
    public static function load() {
		//Database
        require("db.php");
		//Database config
		self::$db = array(
			'driver'	=> 'mysqli',
			'host'		=> 'localhost',
			'db'		=> 'mvc',
			'user'		=> 'root',
			'pass'		=> ''
		);
		DB::instance();
		
		//Paths
		require("paths.php");
		
		//Route voor routes
		require("route.php");	
    }
}

?>