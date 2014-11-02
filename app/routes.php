<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

/*Route::get('/', function()
{
	return View::make('hello');
});
*/
Route::any('/login', 'UserController@login');

Route::post('/logon', 'UserController@logon');

Route::get('/logout', 'UserController@logout');



Route::group(array('before' => 'auth'), function()
{
	Route::resource('/', 'HomeController');
	Route::resource('agendamento', 'AgendamentoController');
	Route::resource('aluno', 'AlunoController');
	Route::resource('autor', 'AutorController');
	Route::resource('classe', 'ClasseController');
	Route::resource('emprestimo', 'EmprestimoController');
	Route::resource('endereco', 'EnderecoController');
	Route::resource('funcionario', 'FuncionarioController');
	Route::resource('genero', 'GeneroController');
	Route::resource('livro', 'LivroController');
	Route::resource('material', 'MaterialController');
	Route::resource('professor', 'ProfessorController');

	

});
