<?php

namespace App\Models\Cases;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MalariaCases extends Model
{
    use HasFactory;

    protected $table = 'malaria_cases';
    protected $primaryKey = 'malaria_case_id';
    public $timestamps = false; 

    protected $fillable = [
        'malaria_case_investig_date',
        'malaria_case_occupation',
        'malaria_case_activity',
        'malaria_case_lamina',
        'malaria_case_symptom',
        'malaria_case_exam_date',
        'malaria_case_exam_result',
        'malaria_case_parasite',
        'malaria_case_parasite_cross',
        'malaria_case_treatment_scheme',
        'malaria_case_other_scheme',
        'malaria_case_treatment_date',
        'malaria_case_classification',
        'malaria_case_native',
        'malaria_case_uf_infection',
        'malaria_case_country_infection',
        'malaria_case_city_infection',
        'malaria_case_ibge_code',
        'malaria_case_district_infection',
        'malaria_case_neighborhood_infection',
        'malaria_case_local_infection',
        'malaria_case_date_closing',
        'malaria_case_obs',
        'get_case_id',
    ];
    
}
