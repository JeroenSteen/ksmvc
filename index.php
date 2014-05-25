<?php
//Config
include("config.php");
Config::load();

//Libs; Action Record
require_once (APP."libs/php-activerecord/ActiveRecord.php");

//Model, View, Controller
include("model.php");
include("view.php");
include("controller.php");

//Autoloader
include("autoloader.php");
//Autolader registreren
spl_autoload_register(array("Autoloader", "load"));
//Inladen files met Autoloader
Autoloader::load();

//Route
include(APP."routes.php");

if(isset($_SERVER['PATH_INFO'])) {
	Controller::launch($_SERVER['PATH_INFO']);
} /*else {
	Controller::launch("home/index");
}*/
	

