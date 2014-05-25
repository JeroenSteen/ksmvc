<?php

//class User extends ActiveRecord\Model{
class User extends Model{

    public static $table_name = "user";
    //public static $primary_key = "";


    /*public static $rules = array(
        "first_name" => 1,
        "last_name" => 2,
        "day" => 3,
        "month" => 3,
        "year" => 3,
        "email" => "email",
        "password" => 3,
        "password_confirm" => 3,
    );
*/

    //public function User(){
    //}




    /*
    public function getReminderEmail(){
        return $this->email;
    }

    public function getRememberToken(){
        return $this->remember_token;
    }

    public function setRememberToken($value)
    {
        $this->remember_token = $value;
    }

    public function getRememberTokenName()
    {
        return 'remember_token';
    }

    public function getActivationCode()
    {
        $this->activation_code = $activation_code = $this->getRandomString();
        $this->save();

        return $activation_code;
    }

    public function getResetPasswordCode() {
        $this->reset_password_code = $reset_code = $this->getRandomString();
        $this->save();

        return $reset_code;
    }

    public function getAvatar() {
        $avatar = $this->avatars()->wherePivot('is_avatar', true)->first();

        if ( ! $avatar ) {
            return 'Geen avatar';
        }

        return asset('uploads/' .\Auth::user()->username . '/avatars/' . $avatar->name);
    }

    public function getAvatars()
    {
        return $this->avatars()->get();
    }

    public function getRandomString($length = 42) {
        if ( function_exists('openssl_random_pseudo_bytes') ) {
            $bytes = openssl_random_pseudo_bytes($length * 2);

            if ( $bytes === false ) {
                return false;
            }

            return substr(str_replace(array('/', '+', '='), '', base64_encode($bytes)), 0, $length);
        }

        $pool = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

        return substr(str_shuffle(str_repeat($pool, 5)), 0, $length);
    }
    */



}
