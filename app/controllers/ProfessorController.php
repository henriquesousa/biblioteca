<?php

class ProfessorController extends \BaseController {

	protected $layout = 'layouts.master';

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		// get all the professor
		$professor = Professor::all();
		$quant = count($professor);

		$this->layout->content = View::make('professor.index', compact('professor', 'quant'));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		// load the create form (app/views/professor/create.blade.php)
		$this->layout->content = View::make('professor.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{

		
		$input = Input::all();
		$rules = Professor::$rules;

		$validator = Validator::make($input, $rules);
		
		if ($validator->fails())
	    {
	    	$messages = $validator->messages();
	        return Redirect::back()->withErrors($validator)->withInput();
	    }
	    else
	    {

			$endereco = new Endereco;
			$endereco->tipo        = ucwords(Input::get('tipo'));
			$endereco->logradouro  = ucwords(Input::get('logradouro'));
			$endereco->bairro      = ucwords(Input::get('bairro'));
			$endereco->cidade      = ucwords(Input::get('cidade'));
			$endereco->cep         = Input::get('cep');
			$endereco->uf          = strtoupper(Input::get('uf'));

			$endereco->save();

			$professor = new Professor;
			$professor->id           = Input::get('id');
			$professor->nome         = ucwords(Input::get('nome'));
			$professor->rg     	     = Input::get('rg');
			$professor->cpf     	 = Input::get('cpf');
			$professor->telefone     = Input::get('telefone');
			$professor->masp         = Input::get('masp');
			$professor->endereco_id  = $endereco->id;
			$professor->email        = Input::get('email');

			$professor->save();


			// redirect
			Session::flash('message', 'Professor cadastrado com sucesso!');
			return Redirect::to('professor');
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
		// get the professor
		$professor = Professor::with('endereco')->find($id);

		// show the view and pass the professor to it
		$this->layout->content = View::make('professor.show')->with('professor', $professor);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$professor = Professor::with('endereco')->find($id);

		// show the edit form and pass the professor
		$this->layout->content = View::make('professor.edit', compact('professor'));
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
		$rules = Professor::$rulesUpdate;

		$validator = Validator::make($input, $rules);
		
		if ($validator->fails())
	    {
	    	$messages = $validator->messages();
	        return Redirect::back()->withErrors($validator)->withInput();
	    }
	    else
	    {
			$professor = Professor::findOrFail($id);
			$professor->nome         = ucwords(Input::get('nome'));
			$professor->rg     	     = Input::get('rg');
			$professor->cpf     	 = Input::get('cpf');
			$professor->telefone     = Input::get('telefone');
			$professor->masp         = Input::get('masp');
			$professor->email        = Input::get('email');

			$professor->save();

			$endereco = Endereco::find($input['endereco']);
			$endereco->tipo        = ucwords(Input::get('tipo'));
			$endereco->logradouro  = ucwords(Input::get('logradouro'));
			$endereco->bairro      = ucwords(Input::get('bairro'));
			$endereco->cidade      = ucwords(Input::get('cidade'));
			$endereco->cep         = Input::get('cep');
			$endereco->uf          = strtoupper(Input::get('uf'));

			$endereco->save();


			// redirect
			Session::flash('message', 'Professor atualizado com sucesso!');
			return Redirect::to('professor');
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
		$professor = Professor::find($id);
		$endereco = Endereco::find($professor->endereco_id);

		$endereco->delete();
		$professor->delete();

		// redirect
		Session::flash('message', 'Professor deletado com sucesso!');
		return Redirect::to('professor');
	}


}
