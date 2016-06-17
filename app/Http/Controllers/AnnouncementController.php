<?php

namespace App\Http\Controllers;
use App\Announcement;
use App\User;
use Auth;
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
        $announcements = Announcement::all()->sortByDesc('created_at')->take(5);

        return view('announcement/display',compact('announcements'));
    }

    public function publish(Request $request) 

    {   


        $user = Auth::user();
        $announcement = new Announcement;
        $announcement->title = $request->title;
        $announcement->body = $request->body;
        $announcement->user_id = $user->id;

        $announcement->save();

        $announcements = Announcement::all()->sortByDesc('created_at');
        
        return view('announcement/display',compact('announcements'));
    }

    public function create(){
        
        return view('announcement/form');
    }

}
