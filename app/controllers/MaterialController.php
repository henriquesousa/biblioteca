<?php

class MaterialController extends \BaseController {

	protected $layout = 'layouts.master';

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		// get all the material
		$material = Material::all();

		$quant = count($material);

		$this->layout->content = View::make('material.index', compact('material', 'quant'));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		// load the create form (app/views/material/create.blade.php)
		$this->layout->content = View::make('material.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();

		$rules = Material::$rules;

		$validator = Validator::make($input, $rules);
		
		if ($validator->fails())
	    {
	    	$messages = $validator->messages();
	        return Redirect::back()->withErrors($validator)->withInput();
	    }
	    else
	    {
			$material = new Material;
			$material->nome          = ucwords(Input::get('nome'));
			$material->numero_serie  = Input::get('numero_serie');
			$material->modelo        = strtoupper(Input::get('modelo'));
			$material->obs       	 = strtoupper(Input::get('obs'));

			$material->save();

			// redirect
			Session::flash('message', 'Material cadastrado com sucesso!');
			return Redirect::to('material');
		}
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		// get the material
		$material = Material::find($id);

		// show the view and pass the material to it
		$this->layout->content = View::make('material.show')->with('material', $material);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		// get the material
		$material = Material::find($id);

		// show the edit form and pass the material
		$this->layout->content = View::make('material.edit')
			->with('material', $material);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$input = Input::all();
		$rules = Material::$rules;

		$validator = Validator::make($input, $rules);
		
		if ($validator->fails())
	    {
	    	$messages = $validator->messages();
	        return Redirect::back()->withErrors($validator)->withInput();
	    }
	    else
	    {
			$material = Material::find($id);
			$material->nome         = ucwords(Input::get('nome'));
			$material->numero_serie = Input::get('numero_serie');
			$material->modelo       = strtoupper(Input::get('modelo'));
			$material->obs       	= strtoupper(Input::get('obs'));

			$material->save();

			// redirect
			Session::flash('message', 'Material atualizado com sucesso!');
			return Redirect::to('material');
		}
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		// delete
		$material = Material::find($id);
		$material->delete();

		// redirect
		Session::flash('message', 'Material deletado com sucesso!');
		return Redirect::to('material');
	}


}
