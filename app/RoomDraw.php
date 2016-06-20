<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoomDraw extends Model
{
    //
    protected $table = 'roomdraw';

    public function user(){
    	return $this->belongsTo('App\User');
    }

    public function points(User $user){
    	return $this->$user->points;
    }
}
