<?php

class Poi extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'name' => 'required',
		'description' => 'required',
		'lat' => 'required',
		'lon' => 'required'
	);
}
