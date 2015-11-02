<?php

namespace App\Http\Controllers;
use App\Http\Requests\NewProjectRequest;
use App\Project;
use Redirect;
use Session;

class ProjectController extends Controller
{

    private $developer_id = 100;

    public function show(){
        return view("project.add");
    }

    public function add(NewProjectRequest $request){
        $title = $request->input("title");
        $description = $request->input("description");
        $startDate = $request->input("startDate");

        Project::create(["title" => $title,
                         "description" => $description,
                         "startDate" => $startDate,
                         "developer_id" => $this->developer_id]);

        Session::flash("success", "Votre projet a bien été crée.");

        return Redirect::action("ProjectController@show");
    }
}
