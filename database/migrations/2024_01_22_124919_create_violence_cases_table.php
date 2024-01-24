<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateViolenceCasesTable extends Migration
{

    public function up()
    {
        Schema::create('violence_cases', function (Blueprint $table) {
            $table->id('violence_case_id');
            $table->string('violence_case_social_name', 100)->nullable();
            $table->string('violence_case_occupation', 100)->nullable();
            $table->string('violence_case_marital_status', 45)->nullable();
            $table->string('violence_case_sex', 45)->nullable();
            $table->string('violence_case_gender', 45)->nullable();
            $table->string('violence_case_disability', 15)->nullable();
            $table->string('violence_case_disab_physical', 15)->nullable();
            $table->string('violence_case_disab_intellectual', 15)->nullable();
            $table->string('violence_case_disab_visual', 15)->nullable();
            $table->string('violence_case_disab_hearing', 15)->nullable();
            $table->string('violence_case_disab_mental', 15)->nullable();
            $table->string('violence_case_disab_behavior', 15)->nullable();
            $table->string('violence_case_disab_other', 45)->nullable();
            $table->string('violence_case_uf', 2)->nullable();
            $table->string('violence_case_city', 100)->nullable();
            $table->string('violence_case_ibge_code', 100)->nullable();
            $table->string('violence_case_district', 100)->nullable();
            $table->string('violence_case_neighborhood', 100)->nullable();
            $table->string('violence_case_patio', 100)->nullable();
            $table->string('violence_case_code', 100)->nullable();
            $table->integer('violence_case_number')->nullable();
            $table->string('violence_case_complement', 100)->nullable();
            $table->string('violence_case_geocode3', 100)->nullable();
            $table->string('violence_case_geocode4', 100)->nullable();
            $table->string('violence_case_reference', 100)->nullable();
            $table->string('violence_case_zone', 20)->nullable();
            $table->string('violence_case_hour', 10)->nullable();
            $table->string('violence_case_local', 50)->nullable();
            $table->string('violence_case_local_other', 50)->nullable();
            $table->string('violence_case_occur', 15)->nullable();
            $table->string('violence_case_self_provoked', 15)->nullable();
            $table->string('violence_case_motivation', 100)->nullable();
            $table->string('violence_case_type_physical', 20)->nullable();
            $table->string('violence_case_type_mental', 20)->nullable();
            $table->string('violence_case_type_torture', 20)->nullable();
            $table->string('violence_case_type_sex', 20)->nullable();
            $table->string('violence_case_type_traffic', 20)->nullable();
            $table->string('violence_case_type_financial', 20)->nullable();
            $table->string('violence_case_type_neglect', 20)->nullable();
            $table->string('violence_case_type_child', 20)->nullable();
            $table->string('violence_case_type_legal', 20)->nullable();
            $table->string('violence_case_type_other', 20)->nullable();
            $table->string('violence_case_assault_beat', 20)->nullable();
            $table->string('violence_case_assault_hanging', 20)->nullable();
            $table->string('violence_case_assault_obj_force', 20)->nullable();
            $table->string('violence_case_assault_obj_sharp', 20)->nullable();
            $table->string('violence_case_assault_obj_hot', 20)->nullable();
            $table->string('violence_case_assault_poison', 20)->nullable();
            $table->string('violence_case_assault_gun', 20)->nullable();
            $table->string('violence_case_assault_threat', 20)->nullable();
            $table->string('violence_case_assault_other', 20)->nullable();
            $table->string('violence_case_sex_harass', 20)->nullable();
            $table->string('violence_case_sex_rape', 20)->nullable();
            $table->string('violence_case_sex_child', 20)->nullable();
            $table->string('violence_case_sex_abuse', 20)->nullable();
            $table->string('violence_case_sex_other', 20)->nullable();
            $table->string('violence_case_sex_std', 20)->nullable();
            $table->string('violence_case_sex_hiv', 20)->nullable();
            $table->string('violence_case_sex_hepatitis', 20)->nullable();
            $table->string('violence_case_sex_blood', 20)->nullable();
            $table->string('violence_case_sex_semen', 20)->nullable();
            $table->string('violence_case_sex_secretion', 20)->nullable();
            $table->string('violence_case_sex_contraception', 20)->nullable();
            $table->string('violence_case_sex_abortion', 20)->nullable();
            $table->string('violence_case_author_num', 20)->nullable();
            $table->string('violence_case_author_dad', 20)->nullable();
            $table->string('violence_case_author_mom', 20)->nullable();
            $table->string('violence_case_author_stepfather', 20)->nullable();
            $table->string('violence_case_author_stepmother', 20)->nullable();
            $table->string('violence_case_author_partner', 20)->nullable();
            $table->string('violence_case_author_expartner', 20)->nullable();
            $table->string('violence_case_author_date', 20)->nullable();
            $table->string('violence_case_author_exdate', 20)->nullable();
            $table->string('violence_case_author_child', 20)->nullable();
            $table->string('violence_case_author_sibling', 20)->nullable();
            $table->string('violence_case_author_friend', 20)->nullable();
            $table->string('violence_case_author_stranger', 20)->nullable();
            $table->string('violence_case_author_caregiver', 20)->nullable();
            $table->string('violence_case_author_boss', 20)->nullable();
            $table->string('violence_case_author_police', 20)->nullable();
            $table->string('violence_case_author_self', 20)->nullable();
            $table->string('violence_case_author_person', 20)->nullable();
            $table->string('violence_case_author_other', 20)->nullable();
            $table->string('violence_case_author_sex', 20)->nullable();
            $table->string('violence_case_author_alcohol', 20)->nullable();
            $table->string('violence_case_author_life', 50)->nullable();
            $table->string('violence_case_ref_ubs', 15)->nullable();
            $table->string('violence_case_ref_social', 15)->nullable();
            $table->string('violence_case_ref_scholar', 15)->nullable();
            $table->string('violence_case_ref_council', 15)->nullable();
            $table->string('violence_case_ref_women', 15)->nullable();
            $table->string('violence_case_ref_elderly_c', 15)->nullable();
            $table->string('violence_case_ref_elderly_d', 15)->nullable();
            $table->string('violence_case_ref_h_rights', 15)->nullable();
            $table->string('violence_case_ref_p_ministry', 15)->nullable();
            $table->string('violence_case_ref_children', 15)->nullable();
            $table->string('violence_case_ref_women_d', 15)->nullable();
            $table->string('violence_case_ref_other_d', 15)->nullable();
            $table->string('violence_case_ref_children_j', 15)->nullable();
            $table->string('violence_case_ref_p_defender', 15)->nullable();
            $table->string('violence_case_end_work', 15)->nullable();
            $table->string('violence_case_end_work_accident', 20)->nullable();
            $table->string('violence_case_end_injury', 100)->nullable();
            $table->date('violence_case_end_date')->nullable();
            $table->integer('get_case_id')->nullable();
            $table->timestamps();

          
            $table->foreign('get_case_id')->references('case_id')->on('cases')->onDelete('NO ACTION')->onUpdate('NO ACTION');
        });
    }

  
    public function down()
    {
        Schema::dropIfExists('violence_cases');
    }
}
