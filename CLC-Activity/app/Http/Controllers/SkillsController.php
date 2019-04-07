<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\models\SkillModel;

class SkillsController extends Controller
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
        //retrieve skills table from database
        $dataSet = \App\models\SkillModel::all();
        //pass skills table to view
        return view('userDashViews.skills')->with('dataSet', $dataSet);
    }
    
    public function addSkill(){
        //navigate to page where new skills can be added
        return view ('userDashViews.AddSkill');
    }
    public function submitSkill(Request $request){
        $skill = new SkillModel();
        //Set parameters for query
        $skill->skillTitle = $request->input('skillTitle');
        $skill->skillDescription = $request->input('skillDescription');
        //Save model to DB
        $skill->save();
        //Redirect
        return redirect()->route('skills.dashboard');
    }
}
