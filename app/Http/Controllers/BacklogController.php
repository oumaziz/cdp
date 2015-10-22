<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Userstory;

class BacklogController extends Controller
{
    public function show(){
        $userstories= Userstory::all();
        return $userstories;
        return view("Backlog")->with('userstories',$userstories);
    }
}
