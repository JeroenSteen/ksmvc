<?php

class User extends Model{

    public static $rules = array(
        "first_name" => 1,
        "last_name" => 2,
        "day" => 3,
        "month" => 3,
        "year" => 3,
        "email" => "email",
        "password" => 3,
        "password_confirm" => 3,
    );

    public function User(){
    }

}