<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToActividadTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('actividad', function(Blueprint $table)
		{
			$table->foreign('tipo', 'FK_actividad_tipoactividad')->references('id')->on('tipoactividad')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('actividad', function(Blueprint $table)
		{
			$table->dropForeign('FK_actividad_tipoactividad');
		});
	}

}
