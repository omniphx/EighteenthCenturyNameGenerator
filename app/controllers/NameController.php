<?php

use Faker\Factory as Faker;

class NameController extends \BaseController {

	protected $name;

	public function __construct(Name $name)
	{
		$this->name = $name;
	}

	/**
	 * Display a listing of the resource.
	 * GET /names
	 *
	 * @return Response
	 */
	public function index()
	{
		$names = $this->name->all();

		return $names;
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /names/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('names.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /names
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /names/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$name = $this->name->find($id);

		return $name;
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /names/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$name = $this->name->find($id);

		return 'edit'.$name;
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /names/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /names/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

	public function random($gender)
	{
		$generator = Name::create18th($gender);

		return $generator->name;

	}

}