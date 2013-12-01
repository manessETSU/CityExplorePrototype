<?php

class PoisController extends BaseController {

	/**
	 * Poi Repository
	 *
	 * @var Poi
	 */
	protected $poi;

	public function __construct(Poi $poi)
	{
		$this->poi = $poi;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$pois = $this->poi->all();

		return View::make('pois.index', compact('pois'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('pois.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Poi::$rules);

		if ($validation->passes())
		{
			$this->poi->create($input);

			return Redirect::route('pois.index');
		}

		return Redirect::route('pois.create')
			->withInput()
			->withErrors($validation)
			->with('message', 'There were validation errors.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$poi = $this->poi->findOrFail($id);

		return View::make('pois.show', compact('poi'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$poi = $this->poi->find($id);

		if (is_null($poi))
		{
			return Redirect::route('pois.index');
		}

		return View::make('pois.edit', compact('poi'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$input = array_except(Input::all(), '_method');
		$validation = Validator::make($input, Poi::$rules);

		if ($validation->passes())
		{
			$poi = $this->poi->find($id);
			$poi->update($input);

			return Redirect::route('pois.show', $id);
		}

		return Redirect::route('pois.edit', $id)
			->withInput()
			->withErrors($validation)
			->with('message', 'There were validation errors.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$this->poi->find($id)->delete();

		return Redirect::route('pois.index');
	}

}
