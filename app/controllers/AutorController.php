<?php

class AutorController extends \BaseController {

	protected $layout = 'layouts.master';

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		// get all the autor
		$autor = Autor::all();
		$quant = count($autor);

		$this->layout->content = View::make('autor.index', compact('autor', 'quant'));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		// load the create form (app/views/autor/create.blade.php)
		$this->layout->content = View::make('autor.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$rules = Autor::$rules;

		$validator = Validator::make($input, $rules);
		
		if ($validator->fails())
	    {
	    	$messages = $validator->messages();
	        return Redirect::back()->withErrors($validator)->withInput();
	    }
	    else
	    {
			$autor = new Autor;
			$autor->nome     = Input::get('nome');

			$autor->save();

			// redirect
			Session::flash('message', 'Autor cadastrado com sucesso!');
			return Redirect::to('autor');
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
		// get the autor
		$autor = Autor::find($id);

		// show the view and pass the autor to it
		$this->layout->content = View::make('autor.show')->with('autor', $autor);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		// get the autor
		$autor = Autor::find($id);

		// show the edit form and pass the autor
		$this->layout->content = View::make('autor.edit')
			->with('autor', $autor);
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
		$rules = Autor::$rules;

		$validator = Validator::make($input, $rules);
		
		if ($validator->fails())
	    {
	    	$messages = $validator->messages();
	        return Redirect::back()->withErrors($validator)->withInput();
	    }
	    else
	    {
			$autor = Autor::find($id);
			$autor->nome       = Input::get('nome');

			$autor->save();

			// redirect
			Session::flash('message', 'Autor atualizado com sucesso!');
			return Redirect::to('autor');
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
		$autor = Autor::find($id);
		$autor->delete();

		// redirect
		Session::flash('message', 'Autor deletado com sucesso!');
		return Redirect::to('autor');
	}


}
