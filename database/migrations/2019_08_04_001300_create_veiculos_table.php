<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVeiculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('veiculos', function (Blueprint $table) {
            $table->bigIncrements('Vei_Codigo');
            $table->string('Vei_Descricao',12)->nullable();
            $table->string('Vei_Placa',8)->nullable();
            $table->integer('Vei_Ano');
            $table->enum('Vei_Combustivel', ['Flex', 'Alcool', 'Gasolina', 'Diesel', 'Diesel S10'])->nullable();   // atribuo
            $table->string('Vei_Fabricante');
            $table->integer('Vei_Nlugares');
            $table->integer('Vei_LitrosMala');
            $table->integer('Vei_KMAtual');
            $table->integer('Vei_KMProxOleo');
            $table->boolean('Vei_Status')->nullable();
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
        Schema::dropIfExists('veiculos');
    }
}
