<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use App\file;
use App\RoomDraw;
use DB;
use Excel;

class ExcelController extends Controller
{
    public function importExport()
    {
    	return view('importExport');
    }

    public function downloadExcel($type)
    {
    	$data = RoomDraw::get() ->toArray();
    	return Excel::create('Roomdrawresults',function($excel) use ($data) {
    		$excel -> sheet('mySheet', function($sheet) use ($data) {
    			$sheet->fromArray($data);
    		});
    	})->download($type);
    }

    public function importExcel()
    {

    	if(Input::hasFile('import_file')){
    		$path = Input::file('import_file') -> getRealPath();
    		$data = Excel::load($path,function($reader){
    		})->get();
    		if(!empty($data) && $data->count()){
    			foreach ($data as $key => $value) {
    				$insert[] = ['title'=> $value -> title, 'description' => $value -> description];
    			}
    			if(!empty($insert)){
    				DB::table('file')->insert($insert);
    				dd('Insert Record Successfully');
    			}
    		}
    	}
    	return back();
    }
}

