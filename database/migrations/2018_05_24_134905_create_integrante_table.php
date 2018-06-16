<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateIntegranteTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('integrante', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->date('finicio')->nullable()->comment('Corresponde a la fecha de inicio de la participación del estudiante en el semillero');
			$table->date('ffin')->nullable()->comment('Corresponde a la fecha de fin de la participación del estudiante en el semillero, en caso de estar activo no deberia tener fecha de fin');
			$table->integer('participante')->nullable()->index('IXFK_integrante_participante')->comment('Corresponde a la referencia del participante');
			$table->boolean('estado')->nullable()->comment('Corresponde al estado de la participación del semillero');
			$table->integer('rol')->nullable()->index('IXFK_integrante_rol');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('integrante');
	}

}
