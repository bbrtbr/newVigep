<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInfluenzaCasesTable extends Migration
{
    public function up()
    {
        Schema::create('influenza_cases', function (Blueprint $table) {
            $table->id('influenza_case_id');

            $table->date('influenza_case_date')->nullable();
            $table->string('influenza_case_occupation', 100)->nullable();
            $table->string('influenza_case_vax', 15)->nullable();
            $table->date('influenza_case_vax_date')->nullable();
            $table->string('influenza_case_vax_p', 15)->nullable();
            $table->date('influenza_case_vax_p_date')->nullable();
            $table->string('influenza_case_contact', 50)->nullable();
            $table->string('influenza_case_transport', 100)->nullable();
            $table->string('influenza_case_other', 100)->nullable();

            $table->date('influenza_case_des_1_date')->nullable();
            $table->string('influenza_case_des_1_uf', 2)->nullable();
            $table->string('influenza_case_des_1_city', 100)->nullable();
            $table->string('influenza_case_des_1_country', 100)->nullable();
            $table->string('influenza_case_des_1_transp', 100)->nullable();

            $table->date('influenza_case_des_2_date')->nullable();
            $table->string('influenza_case_des_2_uf', 2)->nullable();
            $table->string('influenza_case_des_2_city', 100)->nullable();
            $table->string('influenza_case_des_2_country', 100)->nullable();
            $table->string('influenza_case_des_2_transp', 100)->nullable();

            $table->date('influenza_case_des_3_date')->nullable();
            $table->string('influenza_case_des_3_uf', 2)->nullable();
            $table->string('influenza_case_des_3_city', 100)->nullable();
            $table->string('influenza_case_des_3_country', 100)->nullable();
            $table->string('influenza_case_des_3_transp', 100)->nullable();

            $table->string('influenza_case_bird', 15)->nullable();
            $table->string('influenza_case_bird_uf', 2)->nullable();
            $table->string('influenza_case_bird_city', 100)->nullable();
            $table->string('influenza_case_bird_country', 100)->nullable();

            $table->string('influenza_case_s_fever', 15)->nullable();
            $table->string('influenza_case_s_cough', 15)->nullable();
            $table->string('influenza_case_s_chill', 15)->nullable();
            $table->string('influenza_case_s_dyspneia', 15)->nullable();
            $table->string('influenza_case_s_throat', 15)->nullable();
            $table->string('influenza_case_s_arthralgia', 15)->nullable();
            $table->string('influenza_case_s_myalgia', 15)->nullable();
            $table->string('influenza_case_s_conjun', 15)->nullable();
            $table->string('influenza_case_s_coryza', 15)->nullable();
            $table->string('influenza_case_s_diarrhea', 15)->nullable();
            $table->string('influenza_case_s_other', 15)->nullable();

            $table->string('influenza_case_c_cardio', 15)->nullable();
            $table->string('influenza_case_c_pneumo', 15)->nullable();
            $table->string('influenza_case_c_renal', 15)->nullable();
            $table->string('influenza_case_c_hemo', 15)->nullable();
            $table->string('influenza_case_c_imuno', 15)->nullable();
            $table->string('influenza_case_c_smoke', 15)->nullable();
            $table->string('influenza_case_c_metab', 15)->nullable();
            $table->string('influenza_case_c_other', 15)->nullable();

            $table->string('influenza_case_h_hosp', 15)->nullable();
            $table->date('influenza_case_h_date')->nullable();
            $table->string('influenza_case_h_uf', 2)->nullable();
            $table->string('influenza_case_h_city', 100)->nullable();
            $table->string('influenza_case_h_ibge_code', 50)->nullable();
            $table->string('influenza_case_h_name', 50)->nullable();
            $table->string('influenza_case_h_code', 50)->nullable();

            $table->date('influenza_case_pcr_date')->nullable();
            $table->string('influenza_case_pcr_sample', 50)->nullable();
            $table->string('influenza_case_pcr_result', 30)->nullable();
            $table->string('influenza_case_pcr_etio', 100)->nullable();
            $table->string('influenza_case_pcr_type', 15)->nullable();

            $table->date('influenza_case_cult_date')->nullable();
            $table->string('influenza_case_cult_sample', 50)->nullable();
            $table->string('influenza_case_cult_result', 30)->nullable();

            $table->date('influenza_case_haem_date')->nullable();
            $table->string('influenza_case_haem_result', 30)->nullable();
            $table->string('influenza_case_haem_etio', 100)->nullable();
            $table->string('influenza_case_haem_type', 15)->nullable();

            $table->date('influenza_case_xray_date')->nullable();
            $table->string('influenza_case_xray_result', 30)->nullable();

            $table->string('influenza_case_res_final', 40)->nullable();
            $table->string('influenza_case_res_other', 50)->nullable();
            $table->string('influenza_case_res_conf', 40)->nullable();
            $table->string('influenza_case_res_local', 20)->nullable();
            $table->string('influenza_case_res_uf', 2)->nullable();
            $table->string('influenza_case_res_country', 100)->nullable();
            $table->string('influenza_case_res_city', 100)->nullable();
            $table->string('influenza_case_res_ibge_code', 50)->nullable();
            $table->string('influenza_case_res_district', 100)->nullable();
            $table->string('influenza_case_res_neigh', 100)->nullable();
            $table->string('influenza_case_res_work', 15)->nullable();
            $table->string('influenza_case_res_evo', 30)->nullable();
            $table->date('influenza_case_res_date_d')->nullable();
            $table->date('influenza_case_res_date_c')->nullable();

            $table->string('influenza_case_obs', 200)->nullable();

            $table->unsignedBigInteger('get_case_id')->nullable();
            $table->foreign('get_case_id')->references('case_id')->on('cases')->onDelete('NO ACTION')->onUpdate('NO ACTION');

            $table->timestamps();
        });
    }


}
