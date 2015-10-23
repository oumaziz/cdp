<?php

namespace App\Http\Controllers;

class ProjectController extends Controller
{
    public function show(){
        return view("project.add");
    }

    public function add(){
        return "élément ajouté";
    }
}
