<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHealthUnitsTable extends Migration
{
    public function up()
    {
        Schema::create('health_units', function (Blueprint $table) {
            $table->id(); // 'id' é a chave primária padrão
            $table->string('health_unit_code');
            $table->string('health_unit_name', 255)->nullable();
            $table->string('health_unit_email', 255)->nullable();

            $table->timestamps();

            $table->primary('health_unit_code'); // Definindo 'health_unit_code' como chave primária
        }); 
    }

    public function down()
    {
        Schema::dropIfExists('health_units');
    }
}
