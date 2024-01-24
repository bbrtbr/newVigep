<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHealthUnitsTable extends Migration
{
    public function up()
    {
        Schema::create('health_units', function (Blueprint $table) {
            $table->id('health_unit_code');
            $table->string('health_unit_name', 255)->nullable();
            $table->string('health_unit_email', 255)->nullable();

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('health_units');
    }
}
