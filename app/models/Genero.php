<?php

	class Genero extends Eloquent
	{
		protected $table = 'genero';

		public $timestamps = false;

		protected $primaryKey = 'id';

		protected $garded = [
			"id"
		];

		protected $fillable = [
			"descricao"
		];

		public static $rules = [
			"descricao"	=> "required"
		];

		public function livro()
		{
			return $this->hasMany('Livro');
		}
	}