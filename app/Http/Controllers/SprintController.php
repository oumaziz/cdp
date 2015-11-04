<?php
/**
 * User: oumaziz
 * Date: 03/11/15
 * Time: 19:11
 */

namespace App\Http\Controllers;

use App\Http\Requests\NewSprintRequest;
use App\Sprint;
use DB;

class SprintController extends Controller
{

    public function show($project_id){
        return view("sprint.add", compact("project_id"));
    }

    public function add(NewSprintRequest $r, $project_id){

        Sprint::create([
            "StartDate" => $r->input("StartDate"),
            "EndDate" => $r->input("EndDate"),
            "project_id" => $project_id
        ]);

        return "Bien Ajouté";
    }

    public function edit($project_id, $sprint_id){
        
    }
}