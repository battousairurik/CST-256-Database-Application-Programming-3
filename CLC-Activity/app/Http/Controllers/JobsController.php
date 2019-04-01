<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\models\EmploymentModel;

class JobsController extends Controller
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
        //retrieve data set
        $dataSet = \App\models\EmploymentModel::all();
        //return view with data set
        return view('userDashViews.jobs')->with('dataSet', $dataSet);
    }
    
    public function addJob (){
        //Navigate to Employment history submission page
        return view ('userDashViews.AddJobHistory');
    }
    public function submitJob(Request $request){
        $employment = new EmploymentModel();
        //Set parameters for query
        $employment->companyName = $request->input('companyName');
        $employment->address = $request->input('address');
        $employment->jobTitle = $request->input('jobTitle');
        $employment->responsibilities = $request->input('responsibilities');
        $employment->numYears = $request->input('numYears');
        //Save Model to DB
        $employment->save();
        //Redirect
        return redirect()->route('jobs.dashboard');
    }
    public function searchJob(){
        return view ('userDashViews.SearchJob');
    }
    public function searchSubmit(Request $request){
        
        $jobTitle = Request::get('jobTitle');
        $jobDescription = Request::get('jobDescription');
        
        $result = DB::table('employment')
        ->select(DB::raw("*"))
        ->where('job_title', '=', $jobTitle)
        ->where('job_description', '=', $jobDescription)
        ->get();
        
        return view ('userDashViews.SearchJobDisplay')->with('dataSet', $result);
    }
    public function applyJob(){
        return view('userDashViews.JobsApply');
    }
}
