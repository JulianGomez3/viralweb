<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToProyectoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('proyecto', function(Blueprint $table)
		{
			$table->foreign('categoria', 'FK_proyecto_categoria')->references('id')->on('categoria')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('semillero', 'FK_proyecto_semillero')->references('id')->on('semillero')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('proyecto', function(Blueprint $table)
		{
			$table->dropForeign('FK_proyecto_categoria');
			$table->dropForeign('FK_proyecto_semillero');
		});
	}

}
