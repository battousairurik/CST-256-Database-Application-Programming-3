<?php

namespace App\Http\Controllers;

use App\Services\Business\SecurityService;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    
    public function index(Request $request)
    {
        // Usage of path method
        //$path = $request->path();
        //echo 'Path Method: '.$path;
        
        // Usage of is method
        //$method = $request->isMethod('get') ? "GET" : "POST";
        //echo 'GET or POST Method: '.$method;
        
        // Usage of url method
        //$url = $request->url();
        //echo 'URL method: '.$url;
        
        $username = $request->input('username');
        $password = $request->input('password');
        
        $userModel = new \UserModel($username, $password);
        
        $service = new SecurityService();
        $result = $service->login($userModel);
        
        if(!$result){
            
        }
        
    }
}
