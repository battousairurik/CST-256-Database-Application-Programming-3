<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        return view('userDashViews.jobs')->with($dataSet);
    }
    
    public function addJob (){
        //Navigate to Employment history submission page
        return view ('userDashViews.AddJobHistory');
    }
    public function submitJob(Request $request){
        //Set parameters for query
        $companyName = $request->input('companyName');
        $address = $request->input('address');
        $jobTitle = $request->input('jobTitle');
        $responsibilities = $request->input('responsibilities');
        $numYears = $request->input('numYears');
        //Perform DB insert
        DB::table('employment_models')->insert([
            'email' => null,
            'companyName' => $companyName,
            'address' => $address,
            'jobTitle' => $jobTitle,
            'responsibilities' => $responsibilities,
            'numYears' => $numYears,
            'created_at' => null,
            'updated_at' => null
        ]);
        //navigate back to dashboard
        $this->index();
    }
}
