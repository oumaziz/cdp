<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use App\Visitor;

class BacklogController extends Controller
{

    public function show($idProject, $key = null)
    {
        if ($key != null) {
            if (Visitor::where("Key", $key)->where("project_id", $project_id)->get() != null) {
                $userstories = DB::table('userstory')->where('project_id', $idProject)->get();
                return view("Backlog")->with('userstories', $userstories)->with('idProject', $idProject);
            }
        } else {
            $userstories = DB::table('userstory')->where('project_id', $idProject)->get();
            return view("Backlog")->with('userstories', $userstories)->with('idProject', $idProject);
        }

    }

    public function visitor($id, $key)
    {
        if ($key == Visitor::where("project_id", $id)->get()->first()) {

            $userstories = DB::table('userstory')->where('project_id', $id)->get();
            return view("Backlog")->with('userstories', $userstories);

        }
    }
}
