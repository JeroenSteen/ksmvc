<?php
//Config
include("config.php");
Config::load();


//LIB - Illuminate Database (Eloquent)
require(APP."libs/autoload.php");
require(APP."config/database.php");
require("start.php");

//LIB - Twig
require_once(APP."libs/php-twig/lib/Twig/Autoloader.php");
Twig_Autoloader::register();
$loader = new Twig_Loader_String();
$twig = new Twig_Environment($loader);

$twig->render(APP.'views/home/index.php', array('{{ test }}' => 'Fabien'));

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
	

