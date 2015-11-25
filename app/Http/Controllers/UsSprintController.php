<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AddUsToSprintRequest;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Userstory;
use Redirect;
use Session;
use DB; 


class UsSprintController extends Controller
{
   public function show($idProject){
        $userstories= DB::table('userstory')->Where('sprint_id','=', 0)->where('project_id', '=', $idProject)->get();
        return view("sprint.AddUsToSprint")->with('userstories',$userstories)->with($idProject);
    }

    public function showSprint ($idSprint){
        $userstories= DB::table('userstory')->Where('sprint_id','=', $idSprint)->get();
        return view("sprint.DeleteUsFromSprint")->with('userstories', $userstories);
    }

	public function add (Request $request, $idProject, $idUs, $idSprint){

        $userstory = DB::table('userstory')->where('id', '=', $idUs)->update(["sprint_id" => $idSprint]); 
        $userstories= DB::table('userstory')->where('project_id','=', $idProject)->get();

        //return Redirect::action("SprintController@display")->with('idProject', $idProject)->with('idSprint', $idSprint);
        return view("sprint.AddUsToSprint")->with('userstories',$userstories)->with('idProject', $idProject)->with('idSprint', $idSprint);
    }

    public function delete (Request $request, $idProject, $idSprint, $idUs){

        $userstory = DB::table('userstory')->where('id', '=', $idUs)->update(["sprint_id" => 0]); 
        $userstories= DB::table('userstory')->where('project_id','=', $idProject)->get();
        Session::flash("success", "Votre us a bien supprimée.");
        //return Redirect::action("UsSprintController@show")->with('idProject', $idProject);
        return view("sprint.AddUsToSprint")->with('userstories',$userstories)->with('idProject', $idProject)->with('idSprint', $idSprint);
    }
    
}
