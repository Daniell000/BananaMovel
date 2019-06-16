<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCamarasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('camaras', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('lote')->unique(); //Lote é id único
			$table->char('identificacao', 10)->unique(); //Além dos nomes das câmaras terem largura fixa, uma câmara não pode ter dois usos ao mesmo tempo
            $table->string('tipo', 20);
			$table->tinyInteger('temperatura');
			$table->string('tempoEsperado', 255);
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
        Schema::dropIfExists('camaras');
    }
}
