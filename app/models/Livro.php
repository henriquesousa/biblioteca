<?php

	class Livro extends Eloquent
	{
		protected $table = 'livro';

		public $timestamps = false;

		protected $primaryKey = 'id';

		protected $garded = [
			"id"
		];

		protected $fillable = [
			"nome",
			"editora",
			"ano",
			"edicao",
			"isbn",
			"colecao",
			"paginas"
		];

		public static $rules = [

			'nome' 		   => 'required',
			'editora' 	   => 'required',
			'ano' 		   => 'required|numeric',
			'edicao' 	   => 'required',
			'isbn' 		   => 'required|unique:livro',
			'colecao' 	   => 'required',
			'paginas'	   => 'required|numeric'			
			
		];

		public static $rulesUpdate = [

			'nome' 		   => 'required',
			'editora' 	   => 'required',
			'ano' 		   => 'required|numeric',
			'edicao' 	   => 'required',
			'isbn' 		   => 'required',
			'colecao' 	   => 'required',
			'paginas'	   => 'required|numeric'
			
			
		];

		public function genero()
		{
			return $this->belongsTo('Genero');
		}

		public function autor()
		{
			return $this->belongsTo('Autor');
		}

		public function emprestimo()
		{
			return $this->hasMany('Emprestimo');
		}
	}