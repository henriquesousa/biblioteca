<?php

class AlunoController extends \BaseController {

	protected $layout = 'layouts.master';

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		// get all the aluno
		$aluno = Aluno::all();
		$quant = count($aluno);

		$this->layout->content = View::make('aluno.index', compact('aluno', 'quant'));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$classes = Classe::all();

		// load the create form (app/views/aluno/create.blade.php)
		$this->layout->content = View::make('aluno.create', compact('classes'));
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{

		$input = Input::all();
		$rules = Aluno::$rules;

		$validator = Validator::make($input, $rules);
		
		if ($validator->fails())
	    {
	    	$messages = $validator->messages();
	        return Redirect::back()->withErrors($validator)->withInput();
	    }
	    else
	    {

			$endereco = new Endereco;
			$endereco->tipo        = ucwords(strtolower(Input::get('tipo')));
			$endereco->logradouro  = ucwords(strtolower(Input::get('logradouro')));
			$endereco->bairro      = ucwords(strtolower(Input::get('bairro')));
			$endereco->cidade      = ucwords(strtolower(Input::get('cidade')));
			$endereco->cep         = Input::get('cep');
			$endereco->uf          = strtoupper(strtolower(Input::get('uf')));

			$endereco->save();

			$aluno = new Aluno;
			$aluno->id       	= Input::get('id');
			$aluno->nome        = ucwords(strtolower(Input::get('nome')));
			$aluno->pai         = ucwords(strtolower(Input::get('pai')));
			$aluno->mae         = ucwords(strtolower(Input::get('mae')));
			$aluno->endereco_id = $endereco->id;
			$aluno->classe_id   = Input::get('classe_id');

			$aluno->save();


			// redirect
			Session::flash('message', 'Aluno cadastrado com sucesso!');
			return Redirect::to('aluno');
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
		// get the aluno
		$aluno = Aluno::with('endereco', 'classe')->find($id);

		// show the view and pass the aluno to it
		$this->layout->content = View::make('aluno.show', compact('aluno'));
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		// get the aluno
		$aluno = Aluno::with('endereco', 'classe')->first();
		$classes = Classe::all();

		// show the edit form and pass the aluno
		$this->layout->content = View::make('aluno.edit', compact('aluno', 'classes'));
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
		$rules = Aluno::$rules;

		$validator = Validator::make($input, $rules);
		
		if ($validator->fails())
	    {
	    	$messages = $validator->messages();
	        return Redirect::back()->withErrors($validator)->withInput();
	    }
	    else
	    {
	    	$aluno = Aluno::findOrFail($id);
			$aluno->id       	= Input::get('id');
			$aluno->nome        = ucwords(strtolower(Input::get('nome')));
			$aluno->pai         = ucwords(strtolower(Input::get('pai')));
			$aluno->mae         = ucwords(strtolower(Input::get('mae')));
			$aluno->classe_id   = Input::get('classe_id');

			$aluno->save();

			$endereco = Endereco::findOrFail($input['endereco']);
			$endereco->tipo        = ucwords(strtolower(Input::get('tipo')));
			$endereco->logradouro  = ucwords(strtolower(Input::get('logradouro'));
			$endereco->bairro      = ucwords(strtolower(Input::get('bairro'));
			$endereco->cidade      = ucwords(strtolower(Input::get('cidade'));
			$endereco->cep         = Input::get('cep');
			$endereco->uf          = strtoupper(strtolower(Input::get('uf')));

			$endereco->save();

			// redirect
			Session::flash('message', 'Aluno cadastrado com sucesso!');
			return Redirect::to('aluno');
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
		$aluno = Aluno::find($id);
		$endereco = Endereco::find($aluno->endereco_id);

		$aluno->delete();
		$endereco->delete();

		// redirect
		Session::flash('message', 'Aluno deletado com sucesso!');
		return Redirect::to('aluno');
	}


}
