<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TuberculoseCases extends Model
{
    use HasFactory;

    protected $table = 'tuberculosis_cases';
    protected $primaryKey = 'tuberculosis_case_id';
    public $timestamps = false;

    protected $fillable = [
        'tuberculosis_case_promptuary',
        'tuberculosis_case_entry',
        'tuberculosis_case_population_freedom_private',
        'tuberculosis_case_population_health_worker',
        'tuberculosis_case_population_homeless',
        'tuberculosis_case_population_immigrant',
        'tuberculosis_case_beneficiary',
        'tuberculosis_case_form',
        'tuberculosis_case_extrapulmonary',
        'tuberculosis_case_disease_aids',
        'tuberculosis_case_disease_alcoholism',
        'tuberculosis_case_disease_diabetes',
        'tuberculosis_case_disease_mental',
        'tuberculosis_case_disease_drugs',
        'tuberculosis_case_disease_smoking',
        'tuberculosis_case_disease_other',
        'tuberculosis_case_sputum',
        'tuberculosis_case_chest_xray',
        'tuberculosis_case_hiv',
        'tuberculosis_case_therapy',
        'tuberculosis_case_histopathology',
        'tuberculosis_case_culture',
        'tuberculosis_case_tmrtb',
        'tuberculosis_case_sensibility',
        'tuberculosis_case_start_date',
        'tuberculosis_case_total_contacts',
        'get_case_id',
    ];
}
