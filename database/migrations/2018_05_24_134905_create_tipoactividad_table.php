<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTipoactividadTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tipoactividad', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('descripcion', 100)->nullable();
			$table->integer('semillero')->nullable()->index('IXFK_tipoactividad_semillero');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tipoactividad');
	}

}
