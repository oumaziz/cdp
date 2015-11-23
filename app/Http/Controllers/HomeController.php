<?php
namespace App\Http\Controllers;
use DB;
class HomeController extends Controller
{
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}
	
	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{	 $project= DB::table('project')->get();
         $developer= DB::table('Developer')->get();

        return view("project.list")->with('project',$project)->with('developer',$developer);
		//return view('home');
	}
}