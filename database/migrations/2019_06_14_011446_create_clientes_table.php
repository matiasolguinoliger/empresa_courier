<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id')->nullable(false);
            $table->integer('rut_cliente')->nullable(false);
            $table->string('nom_cliente')->nullable(false);
            $table->string('ape_cliente')->nullable(false);
            $table->string('dire_cliente')->nullable(false);
            $table->string('email_cliente')->nullable(false);
            $table->integer('fonomovil_cliente')->nullable(false);
            $table->string('ruta')->nullable(false);
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
        Schema::dropIfExists('clientes');
    }
}
