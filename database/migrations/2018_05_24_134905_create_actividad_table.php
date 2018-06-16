<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateActividadTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('actividad', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->text('resumen', 65535)->nullable()->comment('Corresponde al resumen de lo que se realizara en la actividad');
			$table->date('fecha')->nullable();
			$table->integer('tipo')->nullable()->index('IXFK_actividad_tipoactividad');
			$table->text('informe', 65535)->nullable()->comment('Corresponde a lo realizado en la actividad despues de finalizada');
			$table->string('nombre', 200);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('actividad');
	}

}
