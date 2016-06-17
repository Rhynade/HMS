<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    protected $fillable = ['title','body'];

    public function by(User $user){
    	$this->user_id = $user->id;
    }

    public function user(){
    	return $this->belongsTo(User::class);
	}

	public function addAnnouncement(Announcement $announcement, $userId)
    {

    	$announcement ->user_id = $userId;
    	
    	return $this->save($announcement);
    }
}
