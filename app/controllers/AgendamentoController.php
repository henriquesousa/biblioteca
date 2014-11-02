<?php

class AgendamentoController extends \BaseController {

	protected $layout = 'layouts.master';

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		// get all the agendamento
		$agendamento = Agendamento::with('material', 'professor', 'funcionario')->get();
		$quant = count($agendamento);

		$this->layout->content = View::make('agendamento.index', compact('agendamento', 'quant'));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$materiais = Material::all();
		$professores = Professor::all();
		// load the create form (app/views/agendamento/create.blade.php)
		$this->layout->content = View::make('agendamento.create', compact('materiais', 'professores'));
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$rules = Agendamento::$rules;

		//dd($input);

		$validator = Validator::make($input, $rules);
		
		if ($validator->fails())
	    {
	    	$messages = $validator->messages();
	        return Redirect::back()->withErrors($validator)->withInput();
	    }
	    else
	    {
			$agendamento = new Agendamento;
			$agendamento->id       		  = Input::get('id');
			$agendamento->saida       	  = new DateTime;
			$agendamento->entrega         = '';
			$agendamento->turno           = Input::get('turno');
			$agendamento->horario         = Input::get('horario');
			$agendamento->material_id     = Input::get('material_id');
			$agendamento->professor_id    = Input::get('professor_id');
			$agendamento->funcionario_id  = Auth::user()->id;

			$agendamento->save();

			// redirect
			Session::flash('message', 'Agendamento cadastrado com sucesso!');
			return Redirect::to('agendamento');
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
		// get the agendamento
		$agendamento = Agendamento::with('professor', 'material', 'funcionario')->findOrFail($id);

		// show the view and pass the agendamento to it
		$this->layout->content = View::make('agendamento.show')->with('agendamento', $agendamento);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		// get the agendamento
		$agendamento = Agendamento::with('funcionario', 'professor', 'material')->findOrFail($id);

		$materiais = Material::all();
		$professores = Professor::all();

		// show the edit form and pass the agendamento
		$this->layout->content = View::make('agendamento.edit', compact('agendamento', 'materiais', 'professores'));
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

		$saida = implode("-",array_reverse(explode("/",$input['saida'])));
		$entrega = implode("-",array_reverse(explode("/",$input['entrega'])));


		$rules = Agendamento::$rulesUpdate;

		$validator = Validator::make($input, $rules);
		
		if ($validator->fails())
	    {
	    	$messages = $validator->messages();
	        return Redirect::back()->withErrors($validator)->withInput();
	    }
	    else
	    {
			$agendamento = Agendamento::findOrFail($id);
			$agendamento->saida           = date($saida);
			$agendamento->entrega         = date($entrega);
			$agendamento->material_id     = Input::get('material_id');
			$agendamento->professor_id    = Input::get('professor_id');
			$agendamento->funcionario_id  = '1';//Input::get('funcionario_id');

			$agendamento->save();

			// redirect
			Session::flash('message', 'Agendamento atualizado com sucesso!');
			return Redirect::to('agendamento');
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
		$agendamento = Agendamento::findOrFail($id);
		$agendamento->delete();

		// redirect
		Session::flash('message', 'Agendamento deletado com sucesso!');
		return Redirect::to('agendamento');
	}


}
