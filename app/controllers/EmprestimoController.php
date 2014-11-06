<?php

class EmprestimoController extends \BaseController {

	protected $layout = 'layouts.master';

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		// get all the emprestimo
		$emprestimo = Emprestimo::with('livro', 'aluno', 'funcionario')->paginate(15);

		$quant = count($emprestimo);

		$this->layout->content = View::make('emprestimo.index', compact('emprestimo', 'quant'));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$livros = Livro::all();
		$alunos = Aluno::all();
		// load the create form (app/views/emprestimo/create.blade.php)
		$this->layout->content = View::make('emprestimo.create', compact('alunos', 'livros'));
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$rules = Emprestimo::$rules;

		$validator = Validator::make($input, $rules);
		
		if ($validator->fails())
	    {
	    	$messages = $validator->messages();
	        return Redirect::back()->withErrors($validator)->withInput();
	    }

	    
	    	
		$aluno = $input['aluno_id'];
		
		$emprestimos = count(Emprestimo::whereRaw('entrega_real is NULL')->where('aluno_id', '=', $aluno)->get());
		
		if($emprestimos >= 3) {
		   	Session::flash('message', 'AÇÃO CANCELADA - Aluno já possui 3 emprestimos cadastrados!');
		    return Redirect::to('emprestimo');
		}
		else
	    {


	    	$saida = new DateTime();
	    	$teste = new DateTime();

			$emprestimo = new Emprestimo;
			$emprestimo->saida          = $saida;
			$emprestimo->entrega 		= $teste->add( new DateInterval( "P3D" ) );
			$emprestimo->entrega_real   = NULL;
			$emprestimo->multa   		= 0;
			$emprestimo->funcionario_id = Auth::user()->id;
			$emprestimo->aluno_id       = Input::get('aluno_id');
			$emprestimo->livro_id       = Input::get('livro_id');

			$emprestimo->save();

			// redirect
			Session::flash('message', 'Emprestimo cadastrado com sucesso!');
			return Redirect::to('emprestimo');
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
		// get the emprestimo
		$emprestimo = Emprestimo::with('funcionario', 'aluno', 'livro')->find($id);

		// show the view and pass the emprestimo to it
		$this->layout->content = View::make('emprestimo.show')->with('emprestimo', $emprestimo);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$alunos = Aluno::all();
		$livros = Livro::all();
		// get the emprestimo
		$emprestimo = Emprestimo::findOrFail($id);

		// show the edit form and pass the emprestimo
		$this->layout->content = View::make('emprestimo.edit', compact('emprestimo', 'alunos', 'livros'));
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

		$multa = 0.0;

		if($input['entrega_real'] != "") 
		{
			$entrega_real = implode("-",array_reverse(explode("/",$input['entrega_real'])));
			$entrega = implode("-",array_reverse(explode("/",$input['entrega'])));
			//$entrega_real = date($entrega_real);

			$saida = new DateTime($saida);
			$entrega_real = new DateTime($entrega_real);

			
			$diff = $saida->diff($entrega_real);
			$df = $diff->days;

			$df = (int) $df;

			if($df >= 4)
			{
				$df = $df-3;	
				$multa = $df*2.0;
						
			}
			else
			{
				$multa = 0;
			}

			$rules = Emprestimo::$rulesUpdate;

			$validator = Validator::make($input, $rules);
			
			if ($validator->fails())
		    {
		    	$messages = $validator->messages();
		        return Redirect::back()->withErrors($validator)->withInput();
		    }
		    else
		    {
				$emprestimo = Emprestimo::find($id);
				$emprestimo->saida       	=  $saida;
				$emprestimo->entrega        = date($entrega);
				$emprestimo->entrega_real   = $entrega_real;
				$emprestimo->multa       	= $multa;
				$emprestimo->aluno_id       = Input::get('aluno_id');
				$emprestimo->livro_id       = Input::get('livro_id');

				$emprestimo->save();

				// redirect
				Session::flash('message', 'Emprestimo atualizado com sucesso!');
				return Redirect::to('emprestimo');
			}





		}
		else
		{
			$entrega_real = NULL;
		}


		$rules = Emprestimo::$rulesUpdate;

		$validator = Validator::make($input, $rules);
		
		if ($validator->fails())
	    {
	    	$messages = $validator->messages();
	        return Redirect::back()->withErrors($validator)->withInput();
	    }
	    else
	    {
			$emprestimo = Emprestimo::find($id);
			$emprestimo->saida       	=  date($saida);
			$emprestimo->entrega        = date($entrega);
			$emprestimo->entrega_real   = date($entrega_real);
			$emprestimo->multa       	= $multa;
			$emprestimo->funcionario_id = '1';//Input::get('funcionario_id');
			$emprestimo->aluno_id       = Input::get('aluno_id');
			$emprestimo->livro_id       = Input::get('livro_id');

			$emprestimo->save();

			// redirect
			Session::flash('message', 'Emprestimo atualizado com sucesso!');
			return Redirect::to('emprestimo');
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
		$emprestimo = Emprestimo::find($id);
		$emprestimo->delete();

		// redirect
		Session::flash('message', 'Emprestimo deletado com sucesso!');
		return Redirect::to('emprestimo');
	}


}
