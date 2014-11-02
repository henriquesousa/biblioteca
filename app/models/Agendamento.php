<?php

	class Agendamento extends Eloquent
	{
		protected $table = 'agendamento';

		public $timestamps = false;

		protected $primaryKey = 'id';

		protected $garded = [
			"id"
		];

		protected $fillable = [
			"saida",
			"entrega",
			"material_id",
			"professor_id"
		];

		public static $rules = [

			'material_id' 			   => 'required',
			'professor_id' 			   => 'required',
			'turno' 			       => 'required',
			'horario' 			       => 'required'
		];

		public static $rulesUpdate = [

			'saida' 			   => 'required',
			'entrega' 			   => 'required',
			'turno' 			   => 'required',
			'horario' 			   => 'required'
		];


		public function material()
		{
			return $this->belongsTo('Material');
		}

		public function professor()
		{
			return $this->belongsTo('Professor');
		}

		public function funcionario()
		{
			return $this->belongsTo('Funcionario');
		}
	}