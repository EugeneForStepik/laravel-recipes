<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{	
	protected $fillable = [ 'title', 'body', 'img', 'slug' ];
	
	public function comments()
	{
		return $this -> hasMany( Comment :: class );
	}
	// ====================================
	public function state()
	{
		return $this -> hasOne( State :: class );
	}
	// ====================================
	public function tags()
	{
		return $this -> belongsToMany( Tag :: class );
	}
	// ====================================
}
