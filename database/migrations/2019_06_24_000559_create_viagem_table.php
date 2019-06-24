<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateViagemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('viagem', function (Blueprint $table) {
            $table->increments('id');
			$table->char('tipo', 25);
			$table->String('placa',100)->unique();
			$table->double('km',10,2);
			$table->integer('idmotorista');
			$table->integer('idcarregador');
			$table->string('carga', 100);
			$table->integer('lote');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('viagem');
    }
}
