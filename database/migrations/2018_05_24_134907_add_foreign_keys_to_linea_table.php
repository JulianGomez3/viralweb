<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToLineaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('linea', function(Blueprint $table)
		{
			$table->foreign('semillero', 'FK_linea_semillero')->references('id')->on('semillero')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('linea', function(Blueprint $table)
		{
			$table->dropForeign('FK_linea_semillero');
		});
	}

}
