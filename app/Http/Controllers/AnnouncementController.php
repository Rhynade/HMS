<?php

namespace App\Http\Controllers;
use App\Announcement;
use Illuminate\Http\Request;

use App\Http\Requests;



class AnnouncementController extends Controller
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
        return view('announcement/display');
    }

    public function publish(Request $request) 

    {   
        // $this->validate($request, [

        //     'title' => 'required'
        //     'body' => 'required'

        //     ]);
        
        $announcements = Announcement::all();

        return view('announcement/display', compact('announcements'));
    }

    public function create(){
        
        return view('announcement/form');
    }

}
