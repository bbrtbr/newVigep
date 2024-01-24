<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHealthWorkersTable extends Migration
{
    public function up()
    {
        Schema::create('health_workers', function (Blueprint $table) {
            $table->id('health_worker_id');
            $table->string('health_worker_cpf', 255)->nullable();
            $table->string('health_worker_name', 255)->nullable();
            $table->string('health_worker_registration', 255)->nullable(); 
            $table->string('health_worker_function', 255)->nullable();
            $table->string('health_unit_code',255)->nullable();
            $table->foreign('health_unit_code')->references('health_unit_code')->on('health_units')
                ->onUpdate('NO ACTION')
                ->onDelete('NO ACTION');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('health_workers');
    }
}
