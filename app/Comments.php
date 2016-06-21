<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    protected $table = 'comments';
    protected $fillable = ['body'];

    public function by(User $user){
    	$this->user_id = $user->id;
    }

    public function user(){
    	return $this->belongsTo('App\User');
	}

    public function username(){
        return $this->user->name;
    }

	public function addComments(Comments $comment, $userId)
    {

    	$comment ->user_id = $userId;
    	
    	return $this->save($comment);
    }

}
