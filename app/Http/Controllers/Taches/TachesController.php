<?php

namespace App\Http\Controllers\Taches;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Tache;
use App\Developer;
class TachesController extends Controller
{
    /*
      Display a listing of the resource.
      @return \Illuminate\Http\Response
     */

    public function __construct(){
        $this->middleware('auth');
    }

    public function index()
    {
        $taches = Tache::all();
        return view('taches.index', ['taches' => $taches]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('taches.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'code' => 'required',
            'description' => 'required',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',
            'us_story_id' => 'required'


        ]);
        $tache = Tache::create($request->all());
        return redirect(route('taches.taches.index',$tache));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $tache = Tache::findOrNew($id);
        // return view('taches.show',$tache);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $tache = Tache::findOrNew($id);
        return view('taches.edit',['tache' => $tache]);

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
        $tache = Tache::findOrNew($id);
        $this->validate($request,[
            'code' => 'required',
            'description' => 'required',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',
            'us_story_id' => 'required'


        ]);

        $tache->update($request->all());
        return redirect(route('taches.taches.index'));

    }


    public function take(){
        $taches = Tache::all();
        return view('taches.take', ['taches' => $taches]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        DB::table('tache')->delete($id);
        return redirect(route('taches.taches.index'));
    }




}
