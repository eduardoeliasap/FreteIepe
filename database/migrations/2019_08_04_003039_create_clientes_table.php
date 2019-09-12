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
            $table->bigIncrements('Cli_Codigo');
            $table->string('Cli_Nome', 45)->nullable();
            $table->string('Cli_Endereco', 60)->nullable();
            $table->string('Cli_Numero', 5);
            $table->string('Cli_Complemento', 25);
            $table->string('Cli_Referencia', 45);
            $table->dateTime('Cli_DtNasc');
            $table->boolean('Cli_Status');
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
