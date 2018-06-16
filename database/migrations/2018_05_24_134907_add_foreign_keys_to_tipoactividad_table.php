<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTipoactividadTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('tipoactividad', function(Blueprint $table)
		{
			$table->foreign('semillero', 'FK_tipoactividad_semillero')->references('id')->on('semillero')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('tipoactividad', function(Blueprint $table)
		{
			$table->dropForeign('FK_tipoactividad_semillero');
		});
	}

}
