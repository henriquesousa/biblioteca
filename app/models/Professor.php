<?php

	class Professor extends Eloquent
	{
		protected $table = 'professor';

		public $timestamps = false;

		protected $primaryKey = 'id';


		protected $garded = [
			"id",
			"rg",
			"cpf"
		];

		protected $fillable = [
			"nome",
			"masp",
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
			'rg'             => 'required|unique:professor',
			'cpf'             => 'required|cpf|unique:professor',
			'telefone' 		   => 'required',
			'masp' 			   => 'required|numeric',
			'email'            => 'required|email|unique:professor' 
			
			
		];

		public static $rulesUpdate = [

			'tipo' 			   => 'required',
			'logradouro' 	   => 'required',
			'bairro' 		   => 'required',
			'cidade' 		   => 'required',
			'cep' 			   => 'required|max:10',
			'uf' 			   => 'required|max:2',

			'nome'             => 'required',
			'rg'             => 'required',
			'cpf'             => 'required|cpf',
			'telefone' 		   => 'required',
			'masp' 			   => 'required|numeric',
			'email'            => 'required|email'
			
			
		];

		public function endereco()
		{
			return $this->belongsTo('Endereco');
		}

		public function agendamento()
		{
			return $this->hasMany('agendamento');
		}

	}