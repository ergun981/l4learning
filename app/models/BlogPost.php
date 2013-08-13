<?php

class BlogPost extends Eloquent
{
	protected $table = 'posts';
	public $timestamps = true;

	public function category()
	{
		return $this->belongsTo('Category');
	}
}