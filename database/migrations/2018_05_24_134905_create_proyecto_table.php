<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProyectoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('proyecto', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->text('resumen', 65535);
			$table->date('fechainicio')->nullable();
			$table->date('fechafin')->nullable();
			$table->integer('categoria')->nullable()->index('IXFK_proyecto_categoria');
			$table->integer('semillero')->nullable()->index('IXFK_proyecto_semillero');
			$table->string('nombre', 200);
			$table->string('codigo', 50)->nullable()->comment('Almacena información del codigo del proyecto el cual se debe generar semestralmente 201801001, 201802002, etc.');
			$table->integer('estado')->comment('Define el estado en que se encuentra el proyecto, definido, planeado, etc.');
			$table->text('informacion', 65535)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('proyecto');
	}

}
