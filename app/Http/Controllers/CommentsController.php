<?php

namespace App\Http\Controllers;

use App\Comments;

use App\Maintenance;

use Illuminate\Http\Request;

use App\Http\Requests;

use Auth;

class CommentsController extends Controller
{

	public function __construct()
    {
        $this->middleware('auth');
    }


    public function store(Request $request) {
    	
        $user = Auth::user();

        $id = $request -> id;
        $report = Maintenance::find($id);

        $comment = new Comments;
        $comment -> body = $request -> comment;
        $comment -> maintenance_id = $id;

        $comment -> author = $user -> name;
        $comment -> save();


        $comments = Comments::where('maintenance_id', '=', $id)->get();

        return view('maintenance/single', compact('comments', 'report'));



    }
}
