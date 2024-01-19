<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMalariaCasesTable extends Migration
{
    public function up()
    {
        Schema::create('malaria_cases', function (Blueprint $table) {
            $table->id('malaria_case_id');
            $table->date('malaria_case_investig_date')->nullable();
            $table->string('malaria_case_occupation')->nullable();
            $table->string('malaria_case_activity')->nullable();
            $table->string('malaria_case_lamina')->nullable();
            $table->string('malaria_case_symptom')->nullable();
            $table->date('malaria_case_exam_date')->nullable();
            $table->string('malaria_case_exam_result')->nullable();
            $table->integer('malaria_case_parasite')->nullable();
            $table->string('malaria_case_parasite_cross')->nullable();
            $table->string('malaria_case_treatment_scheme')->nullable();
            $table->string('malaria_case_other_scheme')->nullable();
            $table->date('malaria_case_treatment_date')->nullable();
            $table->string('malaria_case_classification')->nullable();
            $table->string('malaria_case_native')->nullable();
            $table->string('malaria_case_uf_infection', 2)->nullable();
            $table->string('malaria_case_country_infection')->nullable();
            $table->string('malaria_case_city_infection')->nullable();
            $table->string('malaria_case_ibge_code')->nullable();
            $table->string('malaria_case_district_infection')->nullable();
            $table->string('malaria_case_neighborhood_infection')->nullable();
            $table->string('malaria_case_local_infection')->nullable();
            $table->date('malaria_case_date_closing')->nullable();
            $table->string('malaria_case_obs')->nullable();
            $table->unsignedBigInteger('get_case_id')->nullable();

            $table->foreign('get_case_id')->references('case_id')->on('cases')->onDelete('NO ACTION')->onUpdate('NO ACTION');

           
        });
    }

    public function down()
    {
        Schema::dropIfExists('malaria_cases');
    }
}
