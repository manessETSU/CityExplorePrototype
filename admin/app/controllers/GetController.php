<?php

class GetController extends BaseController {

	protected $poi;

	public function __construct(Poi $poi)
	{
		$this->poi = $poi;
	}


	public function index()
	{
		$pois = $this->poi->all();
		
		return Response::json($pois);
	}
	
}