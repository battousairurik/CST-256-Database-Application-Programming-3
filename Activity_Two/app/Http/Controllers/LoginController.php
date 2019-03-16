<?php

namespace App\Http\Controllers;

use App\Services\Business\SecurityService;
use Illuminate\Http\Request;
use App\Models\UserModel;

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
        
        $userModel = new UserModel();
        $userModel->set_username($username);
        $userModel->set_password($password);
        
        $service = new SecurityService();
        
        //If successful, redirect to success page
        if($result = $service->login($userModel)){
            return redirect()->route('login.success');
        }
        //if failure, redirect to login failure
        return redirect()->route('login.failure');
    }
    
    
}
