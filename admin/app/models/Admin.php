<?php

class Admin extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'username' => 'required',
		'password' => 'required'
	);
}
