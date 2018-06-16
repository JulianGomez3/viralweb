<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToIntegranteTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('integrante', function(Blueprint $table)
		{
			$table->foreign('participante', 'FK_integrante_participante')->references('id')->on('participante')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('rol', 'FK_integrante_rol')->references('id')->on('rol')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('integrante', function(Blueprint $table)
		{
			$table->dropForeign('FK_integrante_participante');
			$table->dropForeign('FK_integrante_rol');
		});
	}

}
