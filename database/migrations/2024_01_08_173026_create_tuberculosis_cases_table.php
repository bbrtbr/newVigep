<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('tuberculosis_cases', function (Blueprint $table) {
            $table->id('tuberculosis_case_id');
            $table->integer('tuberculosis_case_promptuary')->nullable();
            $table->string('tuberculosis_case_entry')->nullable();
            $table->string('tuberculosis_case_population_freedom_private')->nullable();
            $table->string('tuberculosis_case_population_health_worker')->nullable();
            $table->string('tuberculosis_case_population_homeless')->nullable();
            $table->string('tuberculosis_case_population_immigrant')->nullable();
            $table->string('tuberculosis_case_beneficiary')->nullable();
            $table->string('tuberculosis_case_form')->nullable();
            $table->string('tuberculosis_case_extrapulmonary')->nullable();
            $table->string('tuberculosis_case_disease_aids')->nullable();
            $table->string('tuberculosis_case_disease_alcoholism')->nullable();
            $table->string('tuberculosis_case_disease_diabetes')->nullable();
            $table->string('tuberculosis_case_disease_mental')->nullable();
            $table->string('tuberculosis_case_disease_drugs')->nullable();
            $table->string('tuberculosis_case_disease_smoking')->nullable();
            $table->string('tuberculosis_case_disease_other')->nullable();
            $table->string('tuberculosis_case_sputum')->nullable();
            $table->string('tuberculosis_case_chest_xray')->nullable();
            $table->string('tuberculosis_case_hiv')->nullable();
            $table->string('tuberculosis_case_therapy')->nullable();
            $table->string('tuberculosis_case_histopathology')->nullable();
            $table->string('tuberculosis_case_culture')->nullable();
            $table->string('tuberculosis_case_tmrtb')->nullable();
            $table->string('tuberculosis_case_sensibility')->nullable();
            $table->date('tuberculosis_case_start_date')->nullable();
            $table->integer('tuberculosis_case_total_contacts')->nullable();
            $table->unsignedBigInteger('get_case_id')->nullable();
            $table->timestamps();

            $table->foreign('get_case_id')
                ->references('case_id')
                ->on('cases')
                ->onDelete('NO ACTION')
                ->onUpdate('NO ACTION');
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('tuberculosis_cases');
    }
};
