<?php

	class Aluno extends Eloquent
	{
		protected $table = 'aluno';

		public $timestamps = false;

		protected $primaryKey = 'id';

		protected $garded = [
			"id"
		];

		protected $fillable = [
			"nome",
			"pai",
			"mae",
			"endereco_id",
			"classe_id"
		];

		public static $rules = [

			'nome' 			   => 'required|min:6',
			'pai' 	   		   => 'required|min:6',
			'mae' 		   	   => 'required|min:6',

			'tipo' 			   => 'required',
			'logradouro' 	   => 'required',
			'bairro' 		   => 'required',
			'cidade' 		   => 'required',
			'cep' 			   => 'required|max:10',
			'uf' 			   => 'required|max:2',
		];

		public static $rulesUpdate = [

			'nome' 			   => 'required|min:6',
			'pai' 	   		   => 'required|min:6',
			'mae' 		   	   => 'required|min:6',

			'tipo' 			   => 'required',
			'logradouro' 	   => 'required',
			'bairro' 		   => 'required',
			'cidade' 		   => 'required',
			'cep' 			   => 'required|max:10',
			'uf' 			   => 'required|max:2',
			
			
		];

		public function classe()
		{
			return $this->belongsTo('Classe');
		}

		public function endereco()
		{
			return $this->belongsTo('Endereco');
		}

		public function emprestimo()
		{
			return $this->hasMany('Emprestimo');
		}
	}