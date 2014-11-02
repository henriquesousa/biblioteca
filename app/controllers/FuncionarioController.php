<?php

class FuncionarioController extends \BaseController {

	protected $layout = 'layouts.master';

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */ 
	public function index()
	{
		// get all the funcionario
		$funcionario = Funcionario::all();
		$quant = count($funcionario);

		$this->layout->content = View::make('funcionario.index', compact('funcionario', 'quant'));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		// load the create form (app/views/funcionario/create.blade.php)
		$this->layout->content = View::make('funcionario.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$rules = Funcionario::$rules;

		$validator = Validator::make($input, $rules);
		
		if ($validator->fails())
	    {
	    	$messages = $validator->messages();
	        return Redirect::back()->withErrors($validator)->withInput();
	    }
	    else
	    {

			$endereco = new Endereco;
			$endereco->tipo        = Input::get('tipo');
			$endereco->logradouro  = ucwords(Input::get('logradouro'));
			$endereco->bairro      = ucwords(Input::get('bairro'));
			$endereco->cidade      = ucwords(Input::get('cidade'));
			$endereco->cep         = Input::get('cep');
			$endereco->uf          = strtoupper(Input::get('uf'));

			$endereco->save();

			$funcionario = new Funcionario;
			$funcionario->id           = Input::get('id');
			$funcionario->nome         = ucwords(Input::get('nome'));
			$funcionario->telefone     = Input::get('telefone');
			$funcionario->masp         = Input::get('masp');
			$funcionario->endereco_id  = $endereco->id;
			$funcionario->email        = Input::get('email');
			$funcionario->username     = Input::get('username');
			$funcionario->password     =  Hash::make(Input::get('password'));

			$funcionario->save();


			// redirect
			Session::flash('message', 'Funcionario cadastrado com sucesso!');
			return Redirect::to('funcionario');
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
		// get the funcionario
		$funcionario = Funcionario::with("endereco")->find($id);

		// show the view and pass the funcionario to it
		$this->layout->content = View::make('funcionario.show')->with('funcionario', $funcionario);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$funcionario = Funcionario::with('endereco')->first();

		// show the edit form and pass the funcionario
		$this->layout->content = View::make('funcionario.edit', compact('funcionario'));

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
		$rules = Funcionario::$rulesUpdate;

		$validator = Validator::make($input, $rules);
		
		if ($validator->fails())
	    {
	    	$messages = $validator->messages();
	        return Redirect::back()->withErrors($validator)->withInput();
	    }
	    else
	    {
			
			$funcionario = Funcionario::find($id);
			$funcionario->id           = Input::get('id');
			$funcionario->nome         = ucwords(Input::get('nome'));
			$funcionario->telefone     = Input::get('telefone');
			$funcionario->masp         = Input::get('masp');
			$funcionario->email        = Input::get('email');
			$funcionario->username     = Input::get('username');
			//$funcionario->password     =  Hash::make(Input::get('password'));

			$funcionario->save();

			$endereco = Endereco::find($funcionario->endereco->id);
			$endereco->tipo        = Input::get('tipo');
			$endereco->logradouro  = ucwords(Input::get('logradouro'));
			$endereco->bairro      = ucwords(Input::get('bairro'));
			$endereco->cidade      = ucwords(Input::get('cidade'));
			$endereco->cep         = Input::get('cep');
			$endereco->uf          = strtoupper(Input::get('uf'));

			$endereco->save();

			// redirect
			Session::flash('message', 'Funcionario atualizado com sucesso!');
			return Redirect::to('funcionario');
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
		$funcionario = Funcionario::find($id);
		$endereco = Endereco::find($funcionario->endereco_id);

		$endereco->delete();
		$funcionario->delete();

		// redirect
		Session::flash('message', 'Funcionario deletado com sucesso!');
		return Redirect::to('funcionario');
	}


}
