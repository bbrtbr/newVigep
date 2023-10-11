<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHealthEmploymentsTable extends Migration
{
    public function up()
    {
        Schema::create('health_employments', function (Blueprint $table) {
            $table->id('health_employment_id');
            $table->unsignedBigInteger('get_health_unit_id')->nullable();
            $table->unsignedBigInteger('get_health_worker_id')->nullable();

            $table->foreign('get_health_unit_id')->references('health_unit_id')->on('health_units')
                ->onUpdate('NO ACTION')
                ->onDelete('NO ACTION');

            $table->foreign('get_health_worker_id')->references('health_worker_id')->on('health_workers')
                ->onUpdate('NO ACTION')
                ->onDelete('NO ACTION');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('health_employments');
    }
}
