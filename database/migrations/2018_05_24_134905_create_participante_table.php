<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateParticipanteTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('participante', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('documento', 15)->nullable()->comment('Almacena el numero de documento del participante');
			$table->string('nombre', 50)->comment('Almacena el nombre del participante');
			$table->date('fechanacimiento')->nullable();
			$table->string('email', 50);
			$table->string('codigo', 10)->nullable()->comment('Almacena el codigo institucional del participante');
			$table->string('clave', 50)->nullable()->comment('Almacena la clave encriptada del participante.  La encriptacion puede ser HASH o MD5, se deb definir.');
			$table->string('foto', 50)->nullable()->comment('Almacena el nombre del archivo de la dirección de la foto');
			$table->integer('tipo')->nullable()->index('IXFK_participante_tipo');
			$table->string('telefono', 20)->nullable();
			$table->string('facebook', 50)->nullable();
			$table->string('twitter', 50)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('participante');
	}

}
