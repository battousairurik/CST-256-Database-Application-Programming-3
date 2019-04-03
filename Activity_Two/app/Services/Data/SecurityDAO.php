<?php
namespace App\Services\Data;

use App\Models\UserModel\UserModel;

class SecurityDAO{
    //Activity2 part 3.B.IV.
    function __construct() {}
    
    function findByUser ($userModel){
        //Pass object variables to local variables for function consistency
        $username = $userModel->get_username();
        $password = $userModel->get_password();
        //Check connection
        $link = mysql_connect('localhost', 'root', '');
        if (!$link) {
            die('Not connected : ' . mysql_error());
        }
        //Set Database
        $db_selected = mysql_select_db('activity2', $link);
        if (!$db_selected) {
            die ('Can\'t use : ' . mysql_error());
        }
        //PHP string to establish query, find users by passed model username
        $query = "SELECT username, password FROM users WHERE username='$username'";
        //SQL Query execution
        $result = $mysqli->query($query);
        //Fail if there is no user case
        if(!$result){
            return false;
        }
        //Validate password
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                if ($row["password"] == $password){
                    return true;
                }
            }
        }
        return false;
    }
    
    function findAllUsers (){
        $dataSet = UserModel::get()->pluck('username');
        return $dataSet;
    }
    
    function findUserByID ($ID){
        $dataSet = UserModel::get()->pluck('id', $ID);
    }
}