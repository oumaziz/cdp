<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class BacklogController extends Controller
{
    public function show(){
        $userstories= DB::table('userstory')->get();

        return view("Backlog")->with('userstories',$userstories);
    }
}
