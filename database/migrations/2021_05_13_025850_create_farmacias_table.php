<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFarmaciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('farmacias', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('filial', 160)->nullable();
            $table->string('endereco', 255);
            $table->string('bairro', 100);
            $table->string('cidade', 100);
            $table->string('estado', 100);
            $table->string('gerente', 120);
            $table->string('telefone', 80);
            $table->double('latitude', 10, 8)->nullable();
            $table->double('longitude', 11, 8)->nullable();
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('farmacias');
    }
}
