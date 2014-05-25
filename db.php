<?php
	
class DB {

	public static $db = null;
	
	private function DB(){
		
		if(isset(Config::$db)){
			//Database connectie gegevens
			$info = Config::$db;
			
			//Connect gekozen driver
			switch(Config::$db["driver"]){
				case "mysqli":
					$link = mysqli_connect(
						$info['host'],
						$info['user'],
						$info['pass'],
						$info['db']) or die("Error " . mysqli_error($link));
					self::$db = $link;
					break;
				case "pdo":
					break;
			}
		}
	}
	
	//Instance niet kloonbaar
	private function __clone(){}
	
	//Singleton
	public static function & instance() {
        if(!self::$db) {
            self::$db = new DB();
        }
        return self::$db;
    }

}