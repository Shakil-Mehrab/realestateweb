<?php

namespace App;
use App\Model\LIke;
use App\Comment;
use App\Model\Reply;
use App\Model\Property;
use App\User;



use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
  
    public function property()
	{	
	 return $this->belongsTo(Property::class);
    }
    public function likes()
	{	
	 return $this->hasMany(Like::class);
    }
   
    public function replies()
	{	
	 return $this->hasMany(Reply::class)->latest()->limit(2);
	}
  public function user()
	{	
	 return $this->belongsTo(User::class);
	}
}
