<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flies', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name', 160);
            $table->string('cpf', 15);
            $table->string('origin_city', 160);
            $table->double('origin_latitude', 10, 8)->nullable();
            $table->double('origin_longitude', 11, 8)->nullable();
            $table->string('destiny_city', 160);
            $table->double('destiny_latitude', 10, 8)->nullable();
            $table->double('destiny_longitude', 11, 8)->nullable();
            $table->double('price', 11, 8)->nullable();
            $table->string('company_code', 2);
            $table->string('flight_code', 2);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('flies');
    }
}
