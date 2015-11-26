<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use App\Visitor;
use App\Tache;
use App\Userstory;

class BacklogController extends Controller
{

    public function show($idProject, $key = null){	
    	if($key != null){
            if(Visitor::where("Key", $key)->where("project_id", $idProject)->get() != null){
                $userstories= DB::table('userstory')->where('project_id', $idProject)->get();
        		return view("Backlog")->with('userstories',$userstories)->with('idProject', $idProject);
    		}
        } 
        else {
            //pour verifier les us  terminé
            $userstories = Userstory::where('project_id','=', $idProject)->get();
            foreach($userstories as $us){
                $ntaches = Tache::where('us_story_id', '=', $us->id)->get();            
                $nbrtaches = Tache::where('us_story_id', '=', $us->id)->count();

                if($nbrtaches != 0){
                    $i = 0;
                    foreach($ntaches as $tache){
                        if($tache->state == 2 ){ 
                                $i=$i+1;
                        }          
                    }
                    if(($i == $nbrtaches) && ($us->status==0)) {
                      $userstories = Userstory::where('id', '=', $us->id)->update(["status"=> 1]);
                    }
                }
            }   
            //pour récuperer les USs   
            $userstories = Userstory::where('project_id','=', $idProject)->get();
            return view("Backlog")->with('userstories', $userstories)->with('idProject', $idProject);
        }
    }

/*
    public function visitor($id, $key){
        if ($key == Visitor::where("project_id", $id)->get()->first()) {

            $userstories = DB::table('userstory')->where('project_id', $id)->get();
            return view("Backlog")->with('userstories',$userstories);
*/
    public function visitor($id, $key)
    {
        if ($key == Visitor::where("project_id", $id)->get()->first()->Key) {
            $userstories = DB::table('userstory')->where('project_id', $id)->get();
            return view("Backlog")->with('userstories', $userstories)->with('idProject', $id);
        }
    }
}
