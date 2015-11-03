<?php
/**
 * User: oumaziz
 * Date: 03/11/15
 * Time: 19:11
 */

namespace App\Http\Controllers;

class SprintController extends Controller
{

    public function show(){
        return view("sprint.add");
    }

    public function add(){
        return "A faire";
    }
}