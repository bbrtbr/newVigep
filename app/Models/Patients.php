<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patients extends Model
{
    protected $table = 'patients';

   
    protected $primaryKey = 'patient_id';

    protected $fillable = [
        'patient_sex',    
        'patient_race',
        'patient_pregnant',
        'patient_phone',
        'patient_name',
        'patient_mother_name',
        'patient_education',
        'patient_cpf',
        'patient_cns',
        'patient_birthday',
        'patient_age'
    ];
}

