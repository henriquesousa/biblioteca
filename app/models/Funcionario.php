<?php

	class Funcionario extends Eloquent
	{
		protected $table = 'funcionario';

		public $timestamps = false;

		protected $primaryKey = 'id';


		protected $garded = [
			"id",
			"password"
		];

		protected $fillable = [
			"nome",
			"masp",
			"username",
			"email",
			"telefone"
		];

		public static $rules = [

			'tipo' 			   => 'required',
			'logradouro' 	   => 'required',
			'bairro' 		   => 'required',
			'cidade' 		   => 'required',
			'cep' 			   => 'required|max:10',
			'uf' 			   => 'required|max:2',

			'nome'             => 'required',
			'telefone' 		   => 'required',
			'masp' 			   => 'required|numeric',
			'email'            => 'required|email|unique:funcionario',
			'username' 		   => 'required|min:4',
			'password'         => 'required|min:6',
			'password_confirm' => 'required|same:password' 
			
			
		];

		public static $rulesUpdate = [

			'tipo' 			   => 'required',
			'logradouro' 	   => 'required',
			'bairro' 		   => 'required',
			'cidade' 		   => 'required',
			'cep' 			   => 'required|max:10',
			'uf' 			   => 'required|max:2',

			'nome'             => 'required',
			'telefone' 		   => 'required',
			'masp' 			   => 'required|numeric',
			'email'            => 'required|email',
			'username' 		   => 'required|min:4'
			
			
		];

		public function endereco()
		{
			return $this->belongsTo('Endereco');
		}

		public function emprestimo()
		{
			return $this->hasMany('Emprestimo');
		}

		public function agendamento()
		{
			return $this->hasMany('agendamento');
		}

	}