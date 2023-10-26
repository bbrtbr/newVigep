<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RabiesCases extends Model
{
    use HasFactory;

    protected $table = 'rabies_cases';
    protected $primaryKey = 'rabies_case_id';

    protected $fillable = [
        'rabies_case_occupation',
        'rabies_case_exposition_type',
        'rabies_case_localization',
        'rabies_case_injury',
        'rabies_case_injury_type',
        'rabies_case_exposition_date',
        'rabies_case_history',
        'rabies_case_history_when',
        'rabies_case_dose_num',
        'rabies_case_animal_species',
        'rabies_case_animal_condition',
        'rabies_case_animal_observation',
        'rabies_case_treatment',
        'rabies_case_vaccine_lab',
        'rabies_case_vaccine_lot_num',
        'rabies_case_vaccine_expiration_date',
        'rabies_case_vaccine_date_1',
        'rabies_case_vaccine_date_2',
        'rabies_case_vaccine_date_3',
        'rabies_case_vaccine_date_4',
        'rabies_case_vaccine_date_5',
        'rabies_case_animal_final_condition',
        'rabies_case_treatment_interruption',
        'rabies_case_treatment_interruption_reason',
        'rabies_case_treatment_interruption_unit',
        'rabies_case_vaccine_adverse_event',
        'rabies_case_serum',
        'rabies_case_patient_weight',
        'rabies_case_serum_quantity',
        'rabies_case_serum_application',
        'rabies_case_serum_on_injury',
        'rabies_case_serum_lab',
        'rabies_case_serum_num',
        'rabies_case_serum_adverse_event',
        'rabies_case_closing_date',
        'rabies_case_obs',
    ];
}
