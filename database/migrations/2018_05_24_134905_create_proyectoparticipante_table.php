<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProyectoparticipanteTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('proyectoparticipante', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('proyecto')->nullable()->index('IXFK_proyectoparticipante_proyecto');
			$table->integer('participante')->nullable()->index('IXFK_proyectoparticipante_participante');
			$table->text('funciones', 65535)->nullable()->comment('Almacena las funciones desempeñadas por el participante a lo largo del proyecto');
			$table->date('fechainicio')->nullable();
			$table->date('fechafin')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('proyectoparticipante');
	}

}
