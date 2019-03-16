<?php

namespace App\Models\UserModel;

class UserModel{
    private $username;
    private $password;
    
    function __construct (){}
    
    function get_username (){
        return $this->username;
    }
    function get_password(){
        return $this->password;
    }
    function set_username ($username){
        $this->username = $username;
    }
    function set_password($password){
        $this->password = $password;
    }
}