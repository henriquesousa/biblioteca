<?php

class EnderecoController extends \BaseController {

	protected $layout = 'layouts.master';

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		// get all the endereco
		$endereco = Endereco::all();

		$this->layout->content = View::make('endereco.index')->with('endereco', $endereco);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		// load the create form (app/views/endereco/create.blade.php)
		$this->layout->content = View::make('endereco.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$endereco = new Endereco;
		$endereco->id       = Input::get('id');
		$endereco->tipo       = Input::get('tipo');
		$endereco->logradouro       = Input::get('logradouro');
		$endereco->bairro       = Input::get('bairro');
		$endereco->cidade       = Input::get('cidade');
		$endereco->cep       = Input::get('cep');
		$endereco->uf       = Input::get('uf');

		$endereco->save();

		// redirect
		Session::flash('message', 'Endereco cadastrado com sucesso!');
		return Redirect::to('endereco');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		// get the endereco
		$endereco = Endereco::find($id);

		// show the view and pass the endereco to it
		$this->layout->content = View::make('endereco.show')->with('endereco', $endereco);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		// get the endereco
		$endereco = Endereco::find($id);

		// show the edit form and pass the endereco
		$this->layout->content = View::make('endereco.edit')
			->with('endereco', $endereco);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$endereco = Endereco::find($id);
		$endereco->id       = Input::get('id');
		$endereco->tipo       = Input::get('tipo');
		$endereco->logradouro       = Input::get('logradouro');
		$endereco->bairro       = Input::get('bairro');
		$endereco->cidade       = Input::get('cidade');
		$endereco->cep       = Input::get('cep');
		$endereco->uf       = Input::get('uf');

		$endereco->save();

		// redirect
		Session::flash('message', 'Endereco atualizado com sucesso!');
		return Redirect::to('endereco');
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
		$endereco = Endereco::find($id);
		$endereco->delete();

		// redirect
		Session::flash('message', 'Endereco deletado com sucesso!');
		return Redirect::to('endereco');
	}


}
