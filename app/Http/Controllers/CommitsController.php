<?php
/**
 * User: oumaziz
 * Date: 12/11/15
 * Time: 11:32
 */

namespace App\Http\Controllers;
use App\Visitor;

class CommitsController extends Controller
{

    public function show($project_id, $key = null) {

        if($key != null){
            if(Visitor::where("key", $key)->where("project_id", $project_id)->get() != null)
                return "Accès autorisé pour le visiteur, on affiche la page";
        }

        return Redirect()->action('Auth\AuthController@getLogin');
    }
}