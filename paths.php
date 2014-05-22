<?php
$local = array('127.0.0.1', "::1");
if(!in_array($_SERVER['REMOTE_ADDR'], $local)) {
    define("ROOT", "/"); // Root path
    define("SERVER", "remote"); // Remote
} else {
    define("ROOT", ""); // Root path
    define("SERVER", "local"); // Local
}