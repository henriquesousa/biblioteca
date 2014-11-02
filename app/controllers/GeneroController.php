<?php

class GeneroController extends \BaseController {

	protected $layout = 'layouts.master';

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		// get all the genero
		$genero = Genero::all();
		$quant = count($genero);

		$this->layout->content = View::make('genero.index',compact('genero', 'quant'));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		// load the create form (app/views/genero/create.blade.php)
		$this->layout->content = View::make('genero.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$rules = Genero::$rules;

		$validator = Validator::make($input, $rules);
		
		if ($validator->fails())
	    {
	    	$messages = $validator->messages();
	        return Redirect::back()->withErrors($validator)->withInput();
	    }
	    else
	    {
			$genero = new Genero;
			$genero->descricao       = Input::get('descricao');

			$genero->save();

			// redirect
			Session::flash('message', 'Genero cadastrado com sucesso!');
			return Redirect::to('genero');
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
		// get the genero
		$genero = Genero::find($id);

		// show the view and pass the genero to it
		$this->layout->content = View::make('genero.show')->with('genero', $genero);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		// get the genero
		$genero = Genero::find($id);

		// show the edit form and pass the genero
		$this->layout->content = View::make('genero.edit')
			->with('genero', $genero);
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
		$rules = Genero::$rules;

		$validator = Validator::make($input, $rules);
		
		if ($validator->fails())
	    {
	    	$messages = $validator->messages();
	        return Redirect::back()->withErrors($validator)->withInput();
	    }
	    else
	    {
			$genero = Genero::find($id);
			$genero->descricao       = Input::get('descricao');

			$genero->save();

			// redirect
			Session::flash('message', 'Genero atualizado com sucesso!');
			return Redirect::to('genero');
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
		$genero = Genero::find($id);
		$genero->delete();

		// redirect
		Session::flash('message', 'Genero deletado com sucesso!');
		return Redirect::to('genero');
	}


}
