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
        $tache = new Tache();
        $id = $tache->right($this->getRedirectUrl(),1);
        return view('taches.create',['id' => $id]);
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
            'end_date' => 'required|date|after:start_date'

        ]);
        $tache = Tache::create($request->all());
        $tache->sprint()->associate($id);
        return redirect(route('taches.taches.show',$tache));
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
        $taches = array();
        $i = 0;
        foreach($ntaches as $tache){
            if($tache->sprint_id == $id)
            {
                $taches[$i] = $tache;
            }
            $i++;

            //dd($whoDoWhat);
        }
        return view('taches.index', ['taches' => $taches, 'id'=> $id]);
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
        ]);

        $tache->update($request->all());
        return redirect(route('taches.taches.index'));

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