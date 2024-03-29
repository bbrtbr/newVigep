<?php

namespace App\Models\Cases;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InfluenzaCases extends Model
{
    use HasFactory;

    protected $primaryKey = 'influenza_case_id';

    protected $fillable = [
        'influenza_case_date',
        'influenza_case_occupation',
        'influenza_case_vax',
        'influenza_case_vax_date',
        'influenza_case_vax_p',
        'influenza_case_vax_p_date',
        'influenza_case_contact',
        'influenza_case_transport',
        'influenza_case_other',
        'influenza_case_des_1_date',
        'influenza_case_des_1_uf',
        'influenza_case_des_1_city',
        'influenza_case_des_1_country',
        'influenza_case_des_1_transp',
        'influenza_case_des_2_date',
        'influenza_case_des_2_uf',
        'influenza_case_des_2_city',
        'influenza_case_des_2_country',
        'influenza_case_des_2_transp',
        'influenza_case_des_3_date',
        'influenza_case_des_3_uf',
        'influenza_case_des_3_city',
        'influenza_case_des_3_country',
        'influenza_case_des_3_transp',
        'influenza_case_bird',
        'influenza_case_bird_uf',
        'influenza_case_bird_city',
        'influenza_case_bird_country',
        'influenza_case_s_fever',
        'influenza_case_s_cough',
        'influenza_case_s_chill',
        'influenza_case_s_dyspneia',
        'influenza_case_s_throat',
        'influenza_case_s_arthralgia',
        'influenza_case_s_myalgia',
        'influenza_case_s_conjun',
        'influenza_case_s_coryza',
        'influenza_case_s_diarrhea',
        'influenza_case_s_other',
        'influenza_case_c_cardio',
        'influenza_case_c_pneumo',
        'influenza_case_c_renal',
        'influenza_case_c_hemo',
        'influenza_case_c_imuno',
        'influenza_case_c_smoke',
        'influenza_case_c_metab',
        'influenza_case_c_other',
        'influenza_case_h_hosp',
        'influenza_case_h_date',
        'influenza_case_h_uf',
        'influenza_case_h_city',
        'influenza_case_h_ibge_code',
        'influenza_case_h_name',
        'influenza_case_h_code',
        'influenza_case_pcr_date',
        'influenza_case_pcr_sample',
        'influenza_case_pcr_result',
        'influenza_case_pcr_etio',
        'influenza_case_pcr_type',
        'influenza_case_cult_date',
        'influenza_case_cult_sample',
        'influenza_case_cult_result',
        'influenza_case_haem_date',
        'influenza_case_haem_result',
        'influenza_case_haem_etio',
        'influenza_case_haem_type',
        'influenza_case_xray_date',
        'influenza_case_xray_result',
        'influenza_case_res_final',
        'influenza_case_res_other',
        'influenza_case_res_conf',
        'influenza_case_res_local',
        'influenza_case_res_uf',
        'influenza_case_res_country',
        'influenza_case_res_city',
        'influenza_case_res_ibge_code',
        'influenza_case_res_district',
        'influenza_case_res_neigh',
        'influenza_case_res_work',
        'influenza_case_res_evo',
        'influenza_case_res_date_d',
        'influenza_case_res_date_c',
        'influenza_case_obs',
        'get_case_id',
    ];


}
