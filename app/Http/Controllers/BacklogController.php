<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class BacklogController extends Controller
{
    public function show($idProject){

        $userstories= DB::table('userstory')->where('project_id', $idProject)->get();

        return view("Backlog")->with('userstories',$userstories)->with('idProject', $idProject);
    }

    public function visitor($id){
        $userstories = DB::table('userstory')->where('project_id', $id)->get();

        return view("Backlog")->with('userstories',$userstories);
    }
}
