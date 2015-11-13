<?php

namespace App\Http\Controllers;
use App\Visitor;

class BurnDownChartController extends Controller
{

    public function show($project_id, $key = null) {

        if($key != null){
            if(Visitor::where("Key", $key)->where("project_id", $project_id)->get() != null)
                return "Accès autorisé pour le visiteur, on affiche la page";
        }

        return Redirect()->action('Auth\AuthController@getLogin');
    }
}