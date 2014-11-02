<?php

	class Classe extends Eloquent
	{
		protected $table = 'classe';

		public $timestamps = false;

		protected $primaryKey = 'id';

		protected $garded = [
			"id"
		];

		protected $fillable = [
			"serie",
			"turno",
			"turma"
		];

		public static $rules = [

			'serie' 			   => 'required',
			'turno' 	   		   => 'required',
			'turma' 		   	   => 'required'
		];

		public static $rulesUpdate = [

			'serie' 			   => 'required',
			'turno' 	   		   => 'required',
			'turma' 		   	   => 'required'
			
			
		];

		public function aluno()
		{
			return $this->hasMany('Aluno');
		}
	}