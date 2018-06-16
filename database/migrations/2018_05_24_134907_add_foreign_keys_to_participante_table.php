<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToParticipanteTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('participante', function(Blueprint $table)
		{
			$table->foreign('tipo', 'FK_participante_tipo')->references('id')->on('tipo')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('participante', function(Blueprint $table)
		{
			$table->dropForeign('FK_participante_tipo');
		});
	}

}
