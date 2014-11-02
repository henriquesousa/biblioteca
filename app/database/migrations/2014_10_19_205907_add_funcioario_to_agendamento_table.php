<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFuncioarioToAgendamentoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('agendamento', function(Blueprint $table)
		{
			$table->integer('funcionario_id')->unsigned();
			$table->foreign('funcionario_id')->references('id')->on('funcionario');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('agendamento');
	}

}
