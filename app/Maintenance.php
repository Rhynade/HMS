<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Maintenance extends Model
{
    protected $table = 'maintenance';
    protected $fillable = ['title','faultyArea', 'description'];

    public function by(User $user){
    	$this->user_id = $user->id;
    }

    public function user(){
    	return $this->belongsTo('App\User');
	}

    public function username(){
        return $this->user->name;
    }
    
    public function currentRoom(){
        return $this->user->currentRoom;
    }

    public function points(){
        return $this->user->points;
    }

	public function addReport(Maintenance $report, $userId)
    {

    	$report ->user_id = $userId;
    	
    	return $this->save($report);
    }

    public function comments() {

        return $this->hasMany(Comments::class);
    }
}
