<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class BacklogController extends Controller
{
    public function show(){
        $userstories=[];
        return view("Backlog")->with('userstories',$userstories);
    }
}
