<?php

	class Emprestimo extends Eloquent
	{
		protected $table = 'emprestimo';

		public $timestamps = false;

		protected $primaryKey = 'id';

		protected $garded = [
			"id"
		];

		protected $fillable = [
			"saida",
			"entrega",
			"multa",
			"funcionario_id",
			"aluno_id"
		];

		public static $rules = [

			'aluno_id' 			   => 'required',
			'livro_id' 			   => 'required'
		];

		public static $rulesUpdate = [

			'saida' 			   => 'required',
			'entrega' 			   => 'required',
			'aluno_id' 			   => 'required',
			'livro_id' 			   => 'required'
			
		];

		public function aluno()
		{
			return $this->belongsTo('Aluno');
		}

		public function funcionario()
		{
			return $this->belongsTo('Funcionario');
		}

		public function livro()
		{
			return $this->belongsTo('Livro');
		}


		
	}