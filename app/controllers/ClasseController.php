<?php

class ClasseController extends \BaseController {

	protected $layout = 'layouts.master';

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		// get all the classe
		$classe = Classe::all();

		$quant = count($classe);

		$this->layout->content = View::make('classe.index', compact('classe', 'quant'));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		// load the create form (app/views/classe/create.blade.php)
		$this->layout->content = View::make('classe.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$rules = Classe::$rules;

		$validator = Validator::make($input, $rules);
		
		if ($validator->fails())
	    {
	    	$messages = $validator->messages();
	        return Redirect::back()->withErrors($validator)->withInput();
	    }
	    else
	    {
			$classe = new Classe;
			$classe->id       = Input::get('id');
			$classe->serie       = Input::get('serie');
			$classe->turno       = strtoupper(Input::get('turno'));
			$classe->turma       = strtoupper(Input::get('turma'));

			$classe->save();

			// redirect
			Session::flash('message', 'Classe cadastrado com sucesso!');
			return Redirect::to('classe');
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
		// get the classe
		$classe = Classe::find($id);

		// show the view and pass the classe to it
		$this->layout->content = View::make('classe.show')->with('classe', $classe);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		// get the classe
		$classe = Classe::find($id);

		// show the edit form and pass the classe
		$this->layout->content = View::make('classe.edit')
			->with('classe', $classe);
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
		$rules = Classe::$rules;

		$validator = Validator::make($input, $rules);
		
		if ($validator->fails())
	    {
	    	$messages = $validator->messages();
	        return Redirect::back()->withErrors($validator)->withInput();
	    }
	    else
	    {
			$classe = Classe::find($id);
			$classe->id       = Input::get('id');
			$classe->serie       = Input::get('serie');
			$classe->turno       = strtoupper(Input::get('turno'));
			$classe->turma       = strtoupper(Input::get('turma'));

			$classe->save();

			// redirect
			Session::flash('message', 'Classe atualizado com sucesso!');
			return Redirect::to('classe');
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
		$classe = Classe::find($id);
		$classe->delete();

		// redirect
		Session::flash('message', 'Classe deletado com sucesso!');
		return Redirect::to('classe');
	}


}
