<?php
namespace App\Services\Business;

use App\Services\Data\SecurityDAO;

class SecurityService{
    
    function __construct(){}
    
    function login($userModel){
        
        $securityDAO = new SecurityDAO();
        $result = $securityDAO->findByUser($userModel);
        return $result;
    }
    
    
}