<?php

	class Autor extends Eloquent
	{
		protected $table = 'autor';

		public $timestamps = false;

		protected $primaryKey = 'id';

		protected $garded = [
			"id"
		];

		protected $fillable = [
			"nome"
		];

		public static $rules = [
			"nome"	=> "required"
		];

		public function livro()
		{
			return $this->hasMany('Livro');
		}
	}