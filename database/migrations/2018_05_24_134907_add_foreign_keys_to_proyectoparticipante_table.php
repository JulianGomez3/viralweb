<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToProyectoparticipanteTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('proyectoparticipante', function(Blueprint $table)
		{
			$table->foreign('participante', 'FK_proyectoparticipante_participante')->references('id')->on('participante')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('proyecto', 'FK_proyectoparticipante_proyecto')->references('id')->on('proyecto')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('proyectoparticipante', function(Blueprint $table)
		{
			$table->dropForeign('FK_proyectoparticipante_participante');
			$table->dropForeign('FK_proyectoparticipante_proyecto');
		});
	}

}
