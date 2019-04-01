<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\models\EducationModel;

class EducationController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //retrieve users education information
        $dataSet = \App\models\EducationModel::all();
        //Display view with users education information
        return view('userDashViews.education')->with('dataSet', $dataSet);
    }
    
    public function addEducation(){
        //navigate to page where education information can be added
        return view ('userDashViews.AddEducationHistory');
    }
    public function submitEducation(Request $request){
        $education = new EducationModel();
        //Set parameters for query
        $education->schoolName = $request->input('schoolName');
        $education->address = $request->input('address');
        $education->educationLevel = $request->input('educationLevel');
        $education->degree = $request->input('degree');
        $education->numYears = $request->input('numYears');
        //Save Model to DB
        $education->save();
        //Redirect
        return redirect()->route('education.dashboard');
    }
}
