<?php
namespace App\Http\Controllers;

use App\Services\Business\SecurityService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\UserModel;

class Login3Controller extends Controller
{

    public function showLogin3()
    {
        Log::info("Navigating to Login3");
        return view('login3');
    }

    public function index(Request $request)
    {
        Log::info("Entering LoginController::index()");
        if ($this->validateForm($request)){
            Log::info("Exit LoginController::index() with login passing");
            return view('loginSuccess');
            
        }
        else{
            Log::info("Exit LoginController::index() with login failing");
            return view('loginFailure');
        }
    }

    private function validateForm(Request $request)
    {
        // Setup Data Validation Rules for Login Form
        $rules = [
            'username' => 'Required | Between:4,10 | Alpha',
            'password' => 'Required | Between:4,10'
        ];
        Log::info("Parameters are: ",array("username" => $request->username, "password" => $request->password));
        // Run Data Validation Rules
        $this->validate($request, $rules);
    }
}
