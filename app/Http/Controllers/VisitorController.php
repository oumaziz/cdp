<?php
/**
 * User: oumaziz
 * Date: 10/11/15
 * Time: 17:34
 */

namespace App\Http\Controllers;
use App\Http\Requests;
use App\Visitor;

class VisitorController extends Controller
{

    /**
     * Messager pour NASSER :
     * S'il te plait, vu que c'est toi qui crée la vue récupère
     * la clé et mets la dans la methode SHOW (Vu que je n'ai pas de Model)
     *
     * Pour le moment, il n'y a pas de lien. Il faudra qu'on fasse une réunion
     * pour ça.
     * Merci
     */

    public function show($project_id){
        $key = null;
        return view("visitor.show")->with('project_id', $project_id)->with('key', $key);
    }

    public function random($car) {
        $string = "";
        $chaine = "abcdefghijklmnpqrstuvwxy123456789";
        srand((double)microtime()*1000000);
        for($i=0; $i<$car; $i++) {
            $string .= $chaine[rand()%strlen($chaine)];
        }
        return $string;
    }

    function allow($project_id){
        $key = Visitor::where("project_id", $project_id)->get()->first();
        try {
        if ($key == null) {
            $key =static::random(15);
            Visitor::create([
                "project_id" => $project_id,
                "Key" => $key
            ]);
        }
        }catch(\Illuminate\Database\QueryException $e){}
        return view("visitor.show")->with('project_id', $project_id)->with('key', $key);
    }

    public function forbid($project_id){
        $key = null;
        try {
            if ($key != null) {
                Visitor::where("project_id", $project_id)->get()->delete();
            }
        }catch(\Illuminate\Database\QueryException $e){}
        return view("visitor.show")->with('project_id', $project_id)->with('key', $key);
    }
}
