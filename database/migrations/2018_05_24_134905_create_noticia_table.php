<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNoticiaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('noticia', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('descripcion', 200)->comment('Contiene información de la descripción de la noticia');
			$table->text('resumen', 65535)->nullable()->comment('Corresponde al resumen de la noticia');
			$table->text('contenido', 65535)->nullable()->comment('Corresponde a todo el contenido de la noticia en formato HTML con un editor WSGY');
			$table->date('fecha')->nullable();
			$table->integer('semillero')->nullable()->index('IXFK_noticia_semillero');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('noticia');
	}

}
