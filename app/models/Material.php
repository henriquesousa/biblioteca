<?php

	class Material extends Eloquent
	{
		protected $table = 'material';

		public $timestamps = false;

		protected $primaryKey = 'id';

		protected $garded = [
			"id"
		];

		protected $fillable = [
			"nome",
			"numero_serie",
			"modelo",
			"obs"
		];

		public static $rules = [

			'nome' 			   => 'required',
			'numero_serie' 	   => 'required',
			'modelo' 	       => 'required',
			'obs' 	  		   => 'required'
		];


		public function agendamento()
		{
			return $this->hasMany('Agendamento');
		}

	}