<?php

class Post extends \Eloquent {

    static $rules = [
        'name' => 'required|min:4'
    ];
	protected $fillable = ["name", "content"];
}