<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class UsController extends Controller
{
    public function create(){
        return view("UsForm")->with('victim',[]);
    }
    public function modify($idUs){

        $victim =DB::table('userstory')->where('id', '=', $idUs)->get() ;
        return view("UsForm")->with('victim',head($victim));
    }
}
