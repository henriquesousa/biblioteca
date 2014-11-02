<?php

	class Endereco extends Eloquent
	{
		protected $table = 'endereco';

		public $timestamps = false;

		protected $primaryKey = 'id';



		public function funcionario()
		{
			return $this->hasOne('Funcionario');
		}

		public function professor()
		{
			return $this->hasOne('Professor');
		}

		public function aluno()
		{
			return $this->hasOne('Aluno');
		}

		
	}