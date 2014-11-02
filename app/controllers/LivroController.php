<?php

class LivroController extends \BaseController {

	protected $layout = 'layouts.master';

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		// get all the livro
		$livro = Livro::with('genero', 'autor')->get();
		$quant = count($livro);

		$this->layout->content = View::make('livro.index', compact('livro', 'quant'));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$autores = Autor::all();
		$generos = Genero::all();

		// load the create form (app/views/livro/create.blade.php)
		$this->layout->content = View::make('livro.create', compact('autores', 'generos'));
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();

		$rules = Livro::$rules;

		$validator = Validator::make($input, $rules);
		
		if ($validator->fails())
	    {
	    	$messages = $validator->messages();
	        return Redirect::back()->withErrors($validator)->withInput();
	    }
	    else
	    {
			$livro = new Livro;
			$livro->id         = Input::get('id');
			$livro->nome       = ucwords(Input::get('nome'));
			$livro->editora    = ucwords(Input::get('editora'));
			$livro->ano        = Input::get('ano');
			$livro->edicao     = Input::get('edicao');
			$livro->isbn       = Input::get('isbn');
			$livro->colecao    = ucwords(Input::get('colecao'));
			$livro->paginas    = Input::get('paginas');
			$livro->autor_id   = Input::get('autor_id');
			$livro->genero_id  = Input::get('genero_id');

			$livro->save();

			// redirect
			Session::flash('message', 'Livro cadastrado com sucesso!');
			return Redirect::to('livro');
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
		// get the livro
		$livro = Livro::with('autor', 'genero')->find($id);

		// show the view and pass the livro to it
		$this->layout->content = View::make('livro.show')->with('livro', $livro);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		// get the livro
		$livro = Livro::find($id);

		$autores = Autor::all();
		$generos = Genero::all();

		// show the edit form and pass the livro
		$this->layout->content = View::make('livro.edit', compact('livro', 'autores', 'generos'));
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
		$rules = Livro::$rulesUpdate;

		$validator = Validator::make($input, $rules);
		
		if ($validator->fails())
	    {
	    	$messages = $validator->messages();
	        return Redirect::back()->withErrors($validator)->withInput();
	    }
	    else
	    {
			$livro = Livro::find($id);
			$livro->id        = Input::get('id');
			$livro->nome      = ucwords(Input::get('nome'));
			$livro->editora   = ucwords(Input::get('editora'));
			$livro->ano       = Input::get('ano');
			$livro->edicao    = Input::get('edicao');
			$livro->isbn      = Input::get('isbn');
			$livro->colecao   = ucwords(Input::get('colecao'));
			$livro->paginas   = Input::get('paginas');
			$livro->autor_id  = Input::get('autor_id');
			$livro->genero_id = Input::get('genero_id');

			$livro->save();

			// redirect
			Session::flash('message', 'Livro atualizado com sucesso!');
			return Redirect::to('livro');
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
		$livro = Livro::find($id);
		$livro->delete();

		// redirect
		Session::flash('message', 'Livro deletado com sucesso!');
		return Redirect::to('livro');
	}


}
