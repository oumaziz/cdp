<?php

namespace App\Http\Controllers;
use App\Http\Requests\NewProjectRequest;
use App\Project;
use Illuminate\Support\Facades\Auth;
use Redirect;
use Session;
use DB;

class ProjectController extends Controller
{

    public function show(){
        return view("project.add");
    }

    public function projectList(){
        $project= DB::table('project')->get();
         $developer= DB::table('Developer')->get();

        return view("project.list")->with('project',$project)->with('developer',$developer);
    }

    public function disply($idProject){
        //return view("Backlog")->with('idProject',$idProject);
       // return Redirect::action("BacklogController@show")->with('idProject', $idProject);
        $userstories= DB::table('userstory')->with('project_id','=', $idProject)->get();
        return view("Backlog")->with('idProject', $idProject)->with('userstories',$userstories);
    }
    

    public function add(NewProjectRequest $request){

        $developer_id = Auth::user()->id;
        $title = $request->input("title");
        $description = $request->input("description");
        $startDate = $request->input("startDate");

        Project::create(["title" => $title,
                         "description" => $description,
                         "startDate" => $startDate,
                         "developer_id" => $developer_id]);

        Session::flash("success", "Votre projet a bien été crée.");

        return Redirect::action("ProjectController@show");
    }
}
