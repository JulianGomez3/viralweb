<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRolTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('rol', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('descripcion', 50)->comment('Almacena la descripción del nombre del rol definido para el semillero');
			$table->integer('semillero')->nullable()->index('IXFK_rol_semillero')->comment('Relaciona la referencia del semillero al cual pertenecen los roles');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('rol');
	}

}
