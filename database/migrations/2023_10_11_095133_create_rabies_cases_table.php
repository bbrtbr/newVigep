<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRabiesCasesTable extends Migration
{
    public function up()
    {
        Schema::create('rabies_cases', function (Blueprint $table) {
            $table->id('rabies_case_id');
            $table->string('rabies_case_occupation', 255)->nullable();
            $table->string('rabies_case_exposure_contact', 45)->nullable();
            $table->string('rabies_case_exposure_scratch', 45)->nullable();
            $table->string('rabies_case_exposure_lick', 45)->nullable();
            $table->string('rabies_case_exposure_bite', 45)->nullable();
            $table->string('rabies_case_exposure_other', 45)->nullable();
            $table->string('rabies_case_exposure_location_mucosa', 45)->nullable();
            $table->string('rabies_case_exposure_location_head_neck', 45)->nullable();
            $table->string('rabies_case_exposure_location_hands_feet', 45)->nullable();
            $table->string('rabies_case_exposure_location_trunk', 45)->nullable();
            $table->string('rabies_case_exposure_location_upper_limbs', 45)->nullable();
            $table->string('rabies_case_exposure_location_lower_limbs', 45)->nullable();
            $table->string('rabies_case_injury', 45)->nullable();
            $table->string('rabies_case_injury_deep', 45)->nullable();
            $table->string('rabies_case_injury__superficial', 45)->nullable();
            $table->string('rabies_case_injury_lacerating', 45)->nullable();
            $table->date('rabies_case_exposition_date')->nullable();
            $table->string('rabies_case_history_pre_exposure', 45)->nullable();
            $table->string('rabies_case_history_post_exposure', 45)->nullable();
            $table->string('rabies_case_history_when', 45)->nullable();
            $table->integer('rabies_case_dose_num')->nullable();
            $table->string('rabies_case_animal_species', 255)->nullable();
            $table->string('rabies_case_animal_condition', 45)->nullable();
            $table->string('rabies_case_animal_observation', 45)->nullable();
            $table->integer('rabies_case_vaccine_dose_recommend')->nullable();
            $table->string('rabies_case_treatment', 100)->nullable();
            $table->string('rabies_case_vaccine_lab', 100)->nullable();
            $table->string('rabies_case_vaccine_lot_num', 45)->nullable();
            $table->date('rabies_case_vaccine_expiration_date')->nullable();
            $table->date('rabies_case_vaccine_date_1')->nullable();
            $table->date('rabies_case_vaccine_date_2')->nullable();
            $table->date('rabies_case_vaccine_date_3')->nullable();
            $table->date('rabies_case_vaccine_date_4')->nullable();
            $table->date('rabies_case_vaccine_date_5')->nullable();
            $table->string('rabies_case_animal_final_condition', 100)->nullable();
            $table->string('rabies_case_treatment_interruption', 45)->nullable();
            $table->string('rabies_case_treatment_interruption_reason', 100)->nullable();
            $table->string('rabies_case_treatment_interruption_unit',45)->nullable();
            $table->string('rabies_case_vaccine_adverse_event', 45)->nullable();
            $table->string('rabies_case_serum', 45)->nullable();
            $table->float('rabies_case_patient_weight')->nullable();
            $table->float('rabies_case_serum_quantity')->nullable();
            $table->string('rabies_case_serum_application', 45)->nullable();
            $table->string('rabies_case_serum_on_injury', 45)->nullable();
            $table->string('rabies_case_serum_lab', 100)->nullable();
            $table->integer('rabies_case_serum_num')->nullable();
            $table->string('rabies_case_serum_adverse_event', 45)->nullable();
            $table->date('rabies_case_closing_date')->nullable();
            $table->mediumText('rabies_case_obs')->nullable();
            $table->unsignedBigInteger('get_case_id')->nullable();

            $table->foreign('get_case_id')->references('case_id')->on('cases')
                ->onUpdate('NO ACTION')
                ->onDelete('NO ACTION');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('rabies_cases');
    }
}
