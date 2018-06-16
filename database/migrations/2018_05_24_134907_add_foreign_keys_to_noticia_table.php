<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToNoticiaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('noticia', function(Blueprint $table)
		{
			$table->foreign('semillero', 'FK_noticia_semillero')->references('id')->on('semillero')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('noticia', function(Blueprint $table)
		{
			$table->dropForeign('FK_noticia_semillero');
		});
	}

}
