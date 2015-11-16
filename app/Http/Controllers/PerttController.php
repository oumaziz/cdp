<?php

namespace App\Http\Controllers;
use App\Visitor;

class PertController extends Controller
{

    public function show($project_id, $key = null) {

        if($key != null){
            if(Visitor::where("Key", $key)->where("project_id", $project_id)->get() != null)
                return "partie à remplir pour visualisation du pertt";
        }
        
        return Redirect()->action('Auth\AuthController@getLogin');
    }
}