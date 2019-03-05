<?php
class UserModel{
    private $username;
    private $password;
    
    function __construct (){}
    function __construct ($username, $password){
        $this->set_username($username);
        $this->set_password($password);
    }
    
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