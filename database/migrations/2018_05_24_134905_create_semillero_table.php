<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSemilleroTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('semillero', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('nombre', 100)->comment('Almacena el nombre del semillero');
			$table->string('slogan', 200)->nullable()->comment('Almacena el slogan del semillero');
			$table->string('logo', 100)->nullable()->comment('Almacena la dirección de la imagen correspondiente al logo del semillero');
			$table->text('descripcion', 65535)->nullable()->comment('Almacena la descripción del semillero');
			$table->date('fechacreacion')->nullable()->comment('Almacena la fecha de creación del semillero');
			$table->text('vision', 65535)->nullable();
			$table->text('mision', 65535)->nullable();
			$table->text('objetivos', 65535)->nullable();
			$table->integer('director')->nullable();
			$table->string('email', 50)->nullable();
			$table->string('facebook', 50)->nullable();
			$table->string('web', 50)->nullable();
			$table->string('twitter', 50)->nullable();
			$table->text('tematicas', 65535)->nullable()->comment('Corresponde a las tematicas o temas tratados en el semillero');
			$table->text('justificacion', 65535)->nullable();
			$table->text('actividades', 65535)->nullable()->comment('Corresponde a los tipos de actividades que se desarrollan en el semillero que pueden ir desde publicaciones hasta desarrollo de proyectos complejos');
			$table->text('objetivosespecificos', 65535)->nullable();
			$table->text('metodologia', 65535)->nullable();
			$table->text('antecedentes', 65535)->nullable();
			$table->string('grupo', 100)->nullable()->comment('Corresponde al grupo que avala el semillero');
			$table->string('estado', 50)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('semillero');
	}

}
