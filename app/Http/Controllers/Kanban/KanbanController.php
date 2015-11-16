<?php

namespace App\Http\Controllers\Kanban;

use App\Developer;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Tache;

class KanbanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $taches = Tache::all();
        $whoDoWhat = array();
        foreach($taches as $tache){
            if($tache->sprint_id == $id)
            {
                if($tache->developer_id != null){
                    //array_push($whoDoWhat, Developer::findOrFail($tache->developer_id)->attributesToArray()['FirstName'], $tache);
                   // $whoDoWhat[Developer::findOrFail($tache->developer_id)->attributesToArray()['FirstName']] = $tache;

                    //$whoDoWhat[$tache->id] = Developer::findOrFail($tache->developer_id)->attributesToArray()['FirstName'];

                }
            }


            //dd($whoDoWhat);
        }
        return view('kanban.index', ['taches' => $taches, 'results'=> $whoDoWhat]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ntaches = Tache::all();
        $whoDoWhat = array();
        $taches = array();
        $i = 0;
        foreach($ntaches as $tache){
            if($tache->sprint_id == $id)
            {
                $taches[$i] = $tache;
                if($tache->developer_id != null){
                   // $whoDoWhat[Developer::findOrFail($tache->developer_id)->attributesToArray()['FirstName']] = $tache;
                    $whoDoWhat[$tache->id] = Developer::findOrFail($tache->developer_id)->attributesToArray()['FirstName'];

                }
            }
        $i++;

            //dd($whoDoWhat);
        }
        return view('kanban.index', compact('taches','id','whoDoWhat'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
