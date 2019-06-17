<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFinancasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('financas', function (Blueprint $table) {
            $table->increments('id');
			$table->float('valor',100,2);
			$table->string('identificacao',100)->unique();
			$table->char('tipo',8);
			$table->string('descricao',100);
			$table->integer('codigoDoProduto')->unique();
			$table->integer('loteDoProduto')->unique();
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
        Schema::dropIfExists('financas');
    }
}
