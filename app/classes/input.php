<?php

class Input{

    private static $input = array();

    public function Input(){
    }

    public static function all(){
        switch($_SERVER['REQUEST_METHOD']){
            case "POST":
                array_push(self::$input, $_POST);
                break;
            case "GET":
                echo "get";
                array_push(self::$input, $_GET);
                break;
            case "PUT":
                array_push(self::$input, $_PUT);
                break;
            case "DELETE":
                array_push(self::$input, $_DELETE);
                break;
        }

        //Meerdere requests; Keys behouden
        if(isset(self::$input[0])){
            self::$input = self::$input[0];
        }

        return self::$input;
    }

    public static function get(){
        if (isset($_GET)){
            return $_GET;
        } else {
            return null;
        }
    }

    public static function post(){
        if (isset($_POST)){
            return $_POST;
        } else {
            return null;
        }
    }

    public static function put(){
        if (isset($_PUT)){
            return $_PUT;
        } else {
            return null;
        }
    }

    public static function delete(){
        if (isset($_DELETE)){
            return $_DELETE;
        } else {
            return null;
        }
    }

}