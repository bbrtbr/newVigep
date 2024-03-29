<?php

namespace App\Models\Cases;

use Illuminate\Database\Eloquent\Model;

class ViolenceCases extends Model
{
    protected $table = 'violence_cases';
    protected $primaryKey = 'violence_case_id';
    public $timestamps = true;

    protected $fillable = [
        'violence_case_social_name',
        'violence_case_occupation',
        'violence_case_marital_status',
        'violence_case_sex',
        'violence_case_gender',
        'violence_case_disability',
        'violence_case_disab_physical',
        'violence_case_disab_intellectual',
        'violence_case_disab_visual',
        'violence_case_disab_hearing',
        'violence_case_disab_mental',
        'violence_case_disab_behavior',
        'violence_case_disab_other',
        'violence_case_uf',
        'violence_case_city',
        'violence_case_ibge_code',
        'violence_case_district',
        'violence_case_neighborhood',
        'violence_case_patio',
        'violence_case_code',
        'violence_case_number',
        'violence_case_complement',
        'violence_case_geocode3',
        'violence_case_geocode4',
        'violence_case_reference',
        'violence_case_zone',
        'violence_case_hour',
        'violence_case_local',
        'violence_case_local_other',
        'violence_case_occur',
        'violence_case_self_provoked',
        'violence_case_motivation',
        'violence_case_type_physical',
        'violence_case_type_mental',
        'violence_case_type_torture',
        'violence_case_type_sex',
        'violence_case_type_traffic',
        'violence_case_type_financial',
        'violence_case_type_neglect',
        'violence_case_type_child',
        'violence_case_type_legal',
        'violence_case_type_other',
        'violence_case_assault_beat',
        'violence_case_assault_hanging',
        'violence_case_assault_obj_force',
        'violence_case_assault_obj_sharp',
        'violence_case_assault_obj_hot',
        'violence_case_assault_poison',
        'violence_case_assault_gun',
        'violence_case_assault_threat',
        'violence_case_assault_other',
        'violence_case_sex_harass',
        'violence_case_sex_rape',
        'violence_case_sex_child',
        'violence_case_sex_abuse',
        'violence_case_sex_other',
        'violence_case_sex_std',
        'violence_case_sex_hiv',
        'violence_case_sex_hepatitis',
        'violence_case_sex_blood',
        'violence_case_sex_semen',
        'violence_case_sex_secretion',
        'violence_case_sex_contraception',
        'violence_case_sex_abortion',
        'violence_case_author_num',
        'violence_case_author_dad',
        'violence_case_author_mom',
        'violence_case_author_stepfather',
        'violence_case_author_stepmother',
        'violence_case_author_partner',
        'violence_case_author_expartner',
        'violence_case_author_date',
        'violence_case_author_exdate',
        'violence_case_author_child',
        'violence_case_author_sibling',
        'violence_case_author_friend',
        'violence_case_author_stranger',
        'violence_case_author_caregiver',
        'violence_case_author_boss',
        'violence_case_author_police',
        'violence_case_author_self',
        'violence_case_author_person',
        'violence_case_author_other',
        'violence_case_author_sex',
        'violence_case_author_alcohol',
        'violence_case_author_life',
        'violence_case_ref_ubs',
        'violence_case_ref_social',
        'violence_case_ref_scholar',
        'violence_case_ref_council',
        'violence_case_ref_women',
        'violence_case_ref_elderly_c',
        'violence_case_ref_elderly_d',
        'violence_case_ref_h_rights',
        'violence_case_ref_p_ministry',
        'violence_case_ref_children',
        'violence_case_ref_women_d',
        'violence_case_ref_other_d',
        'violence_case_ref_children_j',
        'violence_case_ref_p_defender',
        'violence_case_end_work',
        'violence_case_end_work_accident',
        'violence_case_end_injury',
        'violence_case_end_date',
        'get_case_id',
    ];

}
