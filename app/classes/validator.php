<?php

class Validator{

    public function Validator(){
    }

    //$messages = array('required' => 'The :attribute field is required.');
    //$validator = Validator::make($input, $rules, $messages);

    public static function make($input,$rules=null,$messages=null){}

    public static function accepted(){}
    public static function active_url(){}
    public static function after_date(){}
    public static function alpha(){}
    public static function alpha_dash(){}
    public static function alpha_num(){}
    public static function is_array(){}
    public static function before_date(){}
    public static function between(){}
    public static function confirmed(){}
    public static function date(){}
    public static function date_format(){}
    public static function different(){}
    public static function digits_between(){}
    public static function email($input){
        return filter_var($input, FILTER_VALIDATE_EMAIL) !== false;
    }
    public static function exists(){}
    public static function image(){}
    public static function integer(){}
    public static function ip(){}
    public static function max(){}
    public static function mimes(){}
    public static function min(){}
    public static function not_in(){}
    public static function numeric(){}
    public static function regex(){}
    public static function required(){}
    public static function required_if(){}
    public static function required_with(){}
    public static function required_with_all(){}
    public static function required_without(){}
    public static function required_without_all(){}
    public static function same(){}
    public static function size(){}
    public static function unique(){}
    public static function url(){}
    public static function is_size(){}
}