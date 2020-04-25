<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientes extends Migration
{
    public function up()
{
    Schema::create('clientes', function (Blueprint $table) {
        $table->id();
        $table->string('nome');
        $table->string('cpf');
        $table->bigInteger('rg');
        $table->date('data_nasc');
        $table->timestamps();
    });
}

    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}
