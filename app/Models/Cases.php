<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Patients, App\Models\HealthUnits;
class Cases extends Model
{
    protected $table = 'cases';

   
    protected $primaryKey = 'case_id';

    protected $fillable = [
        'case_type',    
        'case_disease',
        'case_cid',
        'case_notification_date',
        'case_attendance_date'  
    ];
    public function getDate() {
        $patient = Patients::find($this->get_patient_id);
        $healthUnit = HealthUnits::find($this->get_health_unit_id);
        
        $data = [
            'patientName' => $patient ? $patient->patient_name : '',
            'healthUnitName' => $healthUnit ? $healthUnit->health_unit_name : ''
        ];
    
        return $data;
    }
}

