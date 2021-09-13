<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    protected $fillable = [ 'likes', 'views', 'article_id' ];
	
	public $timestamps = false;
}
