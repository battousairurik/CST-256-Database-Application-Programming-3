<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        return view('userDashViews.education')->with($dataSet);
    }
    
    public function addEducation(){
        //navigate to page where education information can be added
        return view ('userDashViews.AddEducationHistory');
    }
    public function submitEducation(Request $request){
        //Set parameters for query
        $schoolName = $request->input('schoolName');
        $address = $request->input('address');
        $educationLevel = $request->input('educationLevel');
        $degree = $request->input('degree');
        $numYears = $request->input('numYears');
        //perform DB insert
        DB::table('education_models')->insert([
            'email' => null,
            'school_name' => $schoolName,
            'address' => $address,
            'education_level' => $educationLevel,
            'degree' => $degree,
            'num_years' => $numYears,
            'created_at' => null,
            'updated_at' => null
        ]);
        //navigate back to dashboard
        $this->index();
    }
}
