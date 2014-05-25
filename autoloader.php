<?php

class Autoloader {
	
	public static $folders = array('classes', 'controllers', 'models');
		
	//Inladen classes
	public static function load() {
        if(!empty(self::$folders)) {
			//Doorloop alle mappen
            foreach (self::$folders as $folder) {
                $handle = opendir(APP."/".$folder);
				//Doorloop alle files
                while (false !== ($entry = readdir($handle))) {
                    if($entry != "." && $entry != "..") {
						//File including
                        require (APP.$folder."/".$entry);
                    }
                }
            }
            self::$folders = array();
        }
    }
	
}

?>