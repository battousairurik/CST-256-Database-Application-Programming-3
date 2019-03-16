<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        return view('userDashViews.skills')->with($dataSet);
    }
    
    public function addSkill(){
        //navigate to page where new skills can be added
        return view ('userDashViews.AddSkill');
    }
    public function submitSkill(Request $request){
        //Set parameters for query
        $skillTitle = $request->input('skillTitle');
        $skillDescription = $request->input('skillDescription');
        //Perform DB insert
        DB::table('skill_models')->insert([
            'email' => null,
            'skillTitle' => $skillTitle,
            'skillDescription' => $skillDescription,
            'created_at' => null,
            'updated_at' => null
        ]);
        //navigate back to dashboard
        $this->index();
    }
}
