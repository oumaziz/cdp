<?php

namespace App\Http\Controllers\BurnDownChart;

use App\Sprint;
use App\Userstory;
use Faker\Provider\cs_CZ\DateTime;
use Illuminate\Http\Request;

use JpGraph\JpGraph;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class BDCController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

        $userstories = Userstory::all();
        $selectedUserStories = array();
        $i = 0;
        foreach($userstories as $userstory){
            if($userstory->project_id == $id){
                $selectedUserStories[$i] = $userstory;
                $i++ ;
            }
        }

        $sprints = Sprint::all();

        $realisedUS = array();
        $cptt = 0;
        $cpt  = count($selectedUserStories);
        foreach($sprints as $sprint){
            if($sprint->EndDate == date('Y-m-d')){
                for($i= 0 ; $i < count($selectedUserStories);$i++){
                    if($selectedUserStories[$i]->status == 1){
                        $cptt++;
                    }
                }
                $realisedUS[$sprint->id] = $cpt - $cptt;
            }
        }
       // dd($realisedUS);

        $j= 1;
        $userstori = array();
        $time = array();

        $userstori[0] = count($selectedUserStories);

        foreach($realisedUS as $key => $value){
            $userstori[$j] = $value;
            $time[$j]  = $key
            ;
            $j++;
        }
        $time[0] = 0;

        //dd($time);
        //$userstori[0] = count($selectedUserStories);
        JpGraph::load();
        JpGraph::module('line');


        //$time = array_keys($realisedUS);
        //dd($realisedUS);


        //dd($time);
        //dd($userstori);


        $graph = new \Graph(900,300);
        $ydata = $userstori;
        $xdata = $time;

        $graph->SetScale('intint');
        $lineplot = new \LinePlot($ydata, $xdata);
        $lineplot->SetColor('forestgreen');
        $graph->Add($lineplot);
        $graph->title->Set('BurnDownChart');
        $graph->xaxis->title->Set('Sprint\'s Time');
        $graph->yaxis->title->Set('UserStories');
        $lineplot->SetWeight(3);

        $gdImgHandler = $graph->Stroke(_IMG_HANDLER);

        //Start buffering
        ob_start();
        //Print the data stream to the buffer
        $graph->img->Stream();
        //Get the contents of the buffer
        $image_data = ob_get_contents();
        //Stop the buffer/clear it.
        ob_end_clean();
        //Set the variable equal to the base 64 encoded value of the stream.
        //This gets passed to the browser and displayed.
        $image = base64_encode($image_data);


        return view('bdchart.index', compact('realisedUS','id','data','texte','image'));


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
