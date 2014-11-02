<?php


class UserController extends BaseController
{

	/**
	*	Apply the filter to each request type post
	*/
	public function __construct() {
		
		$this->beforeFilter('csrf', array('on'=>'post'));
		
	}


	/**
	 * Login Funcionario
	 *
	 * @return view
	 */

	public function login()
	{	
		return View::make('login');
	}


 	/**
 	*  Instance FuncionarioValidator
 	*  array $input and validation  index
 	*
 	* return validation error or user not found
 	**/

 	public function logon()
	{
		 //dd(Hash::make(Input::get('password')));

		if (Input::server("REQUEST_METHOD") == "POST")
		{
			$input = Input::all();

			$rules = User::$rules;

			$validator = Validator::make($input, $rules);

			if ($validator->fails())
		    {
		    	$messages = $validator->messages();
		        return Redirect::to('login')->withErrors($validator)->withInput();
		    }
		    else
		    {

		   		$credentials = [
					"username" => Input::get("username"),
					"password" => Input::get("password")
				];

				if (Auth::attempt($credentials)) {

					return Redirect::to('/');

				} else {
					// falha na autenticacao
					$errors = ['login' => 'Usuário não encontrado!'];
					return Redirect::to('login')->withErrors($errors)->withInput();
				}
			}
			// falha na validação
			$errors = $validator->errors();
			return Redirect::to('login')->withErrors($errors)->withInput();
		}
		else
		{
			return Redirect::to('login');
		}
	}


	/**
 	*  Logout Funcionario
 	* 
 	* return view index
 	**/
	public function logout()
	{
		Auth::logout(); // log the user out of our application
		return Redirect::to('login'); // redirect the user to the login screen
	}
}
		