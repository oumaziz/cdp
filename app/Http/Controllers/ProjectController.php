<?php

namespace App\Http\Controllers;
use App\Http\Requests\NewProjectRequest;
use App\Project;
use Illuminate\Support\Facades\Auth;
use Redirect;
use Session;

class ProjectController extends Controller
{

    public function show(){
        return view("project.add");
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
