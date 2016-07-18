<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use App\Http\Requests;
use App\roomdraw;
use Mail;

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
        if (Auth::user()->role_id == 7){
            $roomdraws = Roomdraw::all();
            $A = array();
            $B = array();
            $C = array();
            $D = array();
            $E = array();
            $F = array();
            $G = array();
            $H = array();
            foreach ($roomdraws as $roomdraw ) {
                if ($roomdraw->unit[0] == 'A'){
                    $A[] = $roomdraw;
                }
                elseif ($roomdraw->unit[0] =='B'){
                    $B[] = $roomdraw;
                }
                elseif ($roomdraw->unit[0] =='C'){
                    $C[] = $roomdraw;
                }
                elseif ($roomdraw->unit[0] =='D'){
                    $D[] = $roomdraw;
                }
                elseif ($roomdraw->unit[0] =='E'){
                    $E[] = $roomdraw;
                }
                elseif ($roomdraw->unit[0] =='F'){
                    $F[] = $roomdraw;
                }
                elseif ($roomdraw->unit[0] =='G'){
                    $G[] = $roomdraw;
                }
                elseif ($roomdraw->unit[0] =='H'){
                    $H[] = $roomdraw;
                }

            }

            return view('roomdrawadmin', compact('A','B','C','D','E','F','G','H'));
        }
        else{
            $roomdraws = RoomDraw::all();
            $user = Auth::user();
            $userid = $user -> id;
            $A = array();
            $B = array();
            $C = array();
            $D = array();
            $E = array();
            $F = array();
            $G = array();
            $H = array();
            foreach ($roomdraws as $roomdraw ) {
                if ($roomdraw->unit[0] == 'A'){
                    $A[] = $roomdraw;
                }
                elseif ($roomdraw->unit[0] =='B'){
                    $B[] = $roomdraw;
                }
                elseif ($roomdraw->unit[0] =='C'){
                    $C[] = $roomdraw;
                }
                elseif ($roomdraw->unit[0] =='D'){
                    $D[] = $roomdraw;
                }
                elseif ($roomdraw->unit[0] =='E'){
                    $E[] = $roomdraw;
                }
                elseif ($roomdraw->unit[0] =='F'){
                    $F[] = $roomdraw;
                }
                elseif ($roomdraw->unit[0] =='G'){
                    $G[] = $roomdraw;
                }
                elseif ($roomdraw->unit[0] =='H'){
                    $H[] = $roomdraw;
                }

            }
            return view('roomdraw', compact('A','B','C','D','E','F','G','H','userid'));
        }
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

        //If user unbids
        if(isset($method)){
            $bidder -> bidcount = 1;
            $bidder -> biddedRoom = '';
            $bidder -> save();


            $room -> user_id = 0;
            $room -> name = '';
            $room -> points = 0;
            $room -> save();

            $userid = $bidder -> id;
            $roomdraws = Roomdraw::all();

            \Session::flash('message', 'Previous bid has been withdrawn. Please make a new bid.');
            return $this->index();

        }

        //current room has no bidder
        elseif ($roomcurrentuser == 0 && $bidcount==1){

            $room -> user_id = $bidder -> id;
            $room -> name = $bidder -> name;
            $room -> points = $bidder -> points;
            $bidder -> bidcount = 0;
            $bidder -> biddedRoom = $room -> unit;

            $room -> save();
            $bidder -> save();
            $userid = $bidder -> id;

            $roomdraws = Roomdraw::all();

            \Session::flash('message', 'Room successfully bidded.');
            return $this->index();
        }

        //Current bidder's points exceeds preivous bidder's points
        elseif( $bidderpoints > $currentpoints && $bidcount==1){

            $previousbidder -> bidcount = 1;
            $previousbidder -> biddedRoom = '';
            $room -> user_id = $bidder -> id;
            $room -> name = $bidder -> name;
            $room -> points = $bidderpoints;
            $bidder -> bidcount = 0;
            $bidder -> biddedRoom = $room -> unit;

            

            $room -> save();
            $previousbidder -> save();
            $bidder -> save();
            $userid = $bidder -> id;

            $roomdraws = RoomDraw::all();

            Mail::send('emails.test',['user'=> $previousbidder],function($message) use ($previousbidder)
            {


            $message->from('admin@KE7.com');
            //change $previousbidder->email;
            $message->to('e0002985@u.nus.edu', $previousbidder->name)->subject('You have been outbidded');
            
            });

            \Session::flash('message', 'Room successfully bidded.');
            return $this->index();

        }

        //Bidcount exceeded
        elseif ( $bidcount < 1){

            $roomdraws = RoomDraw::all();
            $userid = $bidder ->id;

            \Session::flash('message', 'You are only entitled to one bid.');
            return $this->index();
        }

        //Current bidder's points lesser than preivous bidder's points
        elseif( $bidderpoints <= $currentpoints) {


            $roomdraws = RoomDraw::all();
            $userid = $bidder -> id;

            \Session::flash('message', 'Insufficent hall points.');
            return $this->index();
        }

    }
}

