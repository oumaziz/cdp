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
        $i = 0 ;
        foreach($userstories as $userstory){
            if($userstory->project_id == $id){
                $selectedUserStories[$i] = $userstory;
                $i++ ;
            }
        }

        $sprints = Sprint::all();

        $realisedUS = array();
        $cptt = 0;
        foreach($sprints as $sprint){
            $cpt  = count($selectedUserStories);
            $realisedUS[$sprint->id] = $cpt - $cptt ;
            if($sprint->EndDate == date('Y-m-d')){
                for($i= 0 ; $i < count($selectedUserStories);$i++){
                    if($selectedUserStories[$i]->sprint_id == $sprint->id  && $selectedUserStories[$i]->status == 1){
                        $realisedUS[$sprint->id]--;
                        $cptt++;
                    }
                }
            }
        }

        //dd($realisedUS);



        JpGraph::load();
        JpGraph::module('line');


        

        $graph = new \Graph(800,300);
        $ydata = array(6, 3, 8, 5, 15, 16, 19);
        $xdata = array(0, 1, 2, 3, 4, 5, 6);

        $graph->SetScale('intint');
        $lineplot = new \LinePlot($ydata, $xdata);
        $lineplot->SetColor('forestgreen');
        $graph->Add($lineplot);
        $graph->title->Set('Test, à remplacer');
        $graph->xaxis->title->Set('testaxis');
        $graph->yaxis->title->Set('testyaxis');
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
