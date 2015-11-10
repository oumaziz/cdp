<?php
/**
 * User: oumaziz
 * Date: 10/11/15
 * Time: 17:34
 */

namespace App\Http\Controllers;
use App\Http\Requests;

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
}
