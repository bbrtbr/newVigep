<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCasesTable extends Migration
{
    public function up()
    {
        Schema::create('cases', function (Blueprint $table) {
            $table->id('case_id');
            $table->string('case_type')->nullable();
            $table->enum('case_status', ['Aprovado', 'Reprovado', 'Analise'])->nullable();
            $table->string('case_disease', 255)->nullable();
            $table->string('case_cid', 45)->nullable();
            $table->date('case_notification_date')->nullable();
            $table->date('case_attendance_date')->nullable();
            $table->unsignedBigInteger('get_patient_id')->nullable();
            $table->unsignedBigInteger('get_health_worker_id')->nullable();
            $table->string('health_unit_code', 255)->nullable();
            $table->unsignedBigInteger('get_address_id')->nullable();

            $table->foreign('get_patient_id')->references('patient_id')->on('patients')
                ->onUpdate('NO ACTION')
                ->onDelete('NO ACTION');

            $table->foreign('get_health_worker_id')->references('health_worker_id')->on('health_workers')
                ->onUpdate('NO ACTION')
                ->onDelete('NO ACTION');

            $table->foreign('health_unit_code')->references('health_unit_code')->on('health_units')
                ->onUpdate('NO ACTION')
                ->onDelete('NO ACTION');

            $table->foreign('get_address_id')->references('address_id')->on('addresses')
                ->onUpdate('NO ACTION')
                ->onDelete('NO ACTION');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('cases');
    }
}
