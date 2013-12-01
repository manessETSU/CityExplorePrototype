<?php

class MediaController extends BaseController {

	/**
	 * Medium Repository
	 *
	 * @var Medium
	 */
	protected $medium;

	public function __construct(Medium $medium)
	{
		$this->medium = $medium;
	}


	public function index()
	{
		$pois = $this->poi->all();

		return Response::json(array('name' => 'Steve', 'state' => 'CA'));
	}
	
}