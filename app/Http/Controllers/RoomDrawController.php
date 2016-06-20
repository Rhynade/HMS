<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use App\Http\Requests;
use App\roomdraw;

class RoomDrawController extends Controller
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
        $roomdraws = RoomDraw::all();
        $user = Auth::user();
        $userid = $user -> id;
        return view('roomdraw', compact('roomdraws','userid'));
    }

    public function bid(Request $request)
    {   
        //Identify method
        $method = $request -> method;
        //Identify current bidder
        $bidder = Auth::user();

        //Identify room bidded for
        $roomid = $request -> identity;
        if (isset($roomid)){
            $room = RoomDraw::find($roomid);
        }
        else{
            $roomid = $request -> id;
            $room = Roomdraw::find($roomid);
            $roomcurrentuser = $room -> user_id;
        }

        //Bid count of current bidder
        $bidcount = $bidder -> bidcount;

        //Identify previous bidder
        $id = $room -> user_id;
        $previousbidder = User::find($id);

        $bidderpoints = $bidder -> points;
        $currentpoints = $room -> points;

        if(isset($method)){
            $bidder -> bidcount +=1;
            $bidder -> biddedRoom = '';
            $bidder -> save();

            $room -> user_id = 0;
            $room -> name = '';
            $room -> points = 0;
            $room -> save();

            $userid = $bidder -> id;
            $roomdraws = Roomdraw::all();

            \Session::flash('message', 'Previous bid has been withdrawn. Please make a new bid');
            return view('roomdraw', compact('roomdraws','userid'));

        }

        elseif ($roomcurrentuser == 0 && $bidcount==1){

            $room -> user_id = $bidder -> id;
            $room -> name = $bidder -> name;
            $room -> points = $bidder -> points;
            $bidder -> bidcount -=1;
            $bidder -> biddedRoom = $room -> unit;

            $room -> save();
            $bidder -> save();
            $userid = $bidder -> id;

            $roomdraws = Roomdraw::all();

            \Session::flash('message', 'Room successfully bidded.');
            return view('roomdraw', compact('roomdraws','userid'));
        }

        elseif( $bidderpoints > $currentpoints && $bidcount==1){

            $previousbidder -> bidcount +=1;
            $previousbidder -> biddedRoom = '';
            $room -> user_id = $bidder -> id;
            $room -> name = $bidder -> name;
            $room -> points = $bidderpoints;
            $bidder -> bidcount -=1;
            $bidder -> biddedRoom = $room -> unit;

            $room -> save();
            $previousbidder -> save();
            $bidder -> save();
            $userid = $bidder -> id;

            $roomdraws = RoomDraw::all();

            \Session::flash('message', 'Room successfully bidded');
            return view('roomdraw', compact('roomdraws','userid'));

        }

        elseif ( $bidcount < 1){

            \Session::flash('message', 'You are only entitled to one bid');

            $roomdraws = RoomDraw::all();

            $userid = $bidder ->id;
            return view('roomdraw', compact('roomdraws','userid'));
        }

        elseif( $bidderpoints <= $currentpoints) {

            \Session::flash('message', 'Hall points lower than current bidder.');

            $roomdraws = RoomDraw::all();

            $userid = $bidder -> id;

            return view('roomdraw', compact('roomdraws', 'userid'));
        }

    }
}

