<?php

class Category extends Eloquent
{
	protected $table = 'categories';
	public $timestamps = true;

	public function posts()
	{
		return $this->hasMany('BlogPost');
	}
}