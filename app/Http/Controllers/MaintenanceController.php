<?php

namespace App\Http\Controllers;

use App\Maintenance;
use App\User;
use Auth;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Comments;

class MaintenanceController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $user = Auth::user();
        
        $roleId = $user->role_id;


        if($roleId==1) {

          $reports = Maintenance::where('user_id', '=', $user->id)->get()->sortByDesc('created_at');

      } else {

        $reports = Maintenance::all()->sortByDesc('created_at');
    }

    foreach($reports as $report){
        $report->username = $report->username();
        $report->currentRoom = $report->currentRoom();
    }

    return view('maintenance/display',compact('reports'));

}

public function publish(Request $request) 
{
    $user = Auth::user();

    $report = new Maintenance;
    $report->title = $request->title;
    $report->faultyArea = $request->faultyArea;
    $report->description = $request->description;
    $report->user_id = $user->id;

    $report->save();

    return view('maintenance/received');
}

public function show(Maintenance $report) {

    
    $comments = Comments::where('maintenance_id', '=', $report->id)->get();

    return view('maintenance/single', compact('report','comments'));
}

public function create() 
{
    return view('maintenance/form');
}
}
