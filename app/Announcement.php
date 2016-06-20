<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{   
    protected $table = 'maintenances';
    protected $fillable = ['title','body'];

    public function by(User $user){
    	$this->user_id = $user->id;
    }

    public function user(){
    	return $this->belongsTo('App\User');
	}

    public function username(){
        return $this->user->name;
    }

	public function addAnnouncement(Announcement $announcement, $userId)
    {

    	$announcement ->user_id = $userId;
    	
    	return $this->save($announcement);
    }
}
