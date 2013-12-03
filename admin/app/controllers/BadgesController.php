<?php

class BadgesController extends BaseController {

	/**
	 * Badge Repository
	 *
	 * @var Badge
	 */
	protected $badge;

	public function __construct(Badge $badge)
	{
		$this->badge = $badge;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$badges = $this->badge->all();

		return View::make('badges.index', compact('badges'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('badges.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Badge::$rules);

		if ($validation->passes())
		{
			$this->badge->create($input);

			return Redirect::route('badges.index');
		}

		return Redirect::route('badges.create')
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
		$badge = $this->badge->findOrFail($id);

		return View::make('badges.show', compact('badge'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$badge = $this->badge->find($id);

		if (is_null($badge))
		{
			return Redirect::route('badges.index');
		}

		return View::make('badges.edit', compact('badge'));
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
		$validation = Validator::make($input, Badge::$rules);

		if ($validation->passes())
		{
			$badge = $this->badge->find($id);
			$badge->update($input);

			return Redirect::route('badges.show', $id);
		}

		return Redirect::route('badges.edit', $id)
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
		$this->badge->find($id)->delete();

		return Redirect::route('badges.index');
	}

}
