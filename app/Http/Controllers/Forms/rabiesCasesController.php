<?php

namespace App\Http\Controllers\Forms;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Cases as ModelsCases;
use App\Models\Patients, App\Models\Addresses, App\Models\RabiesCases, App\Models\HealthUnits, App\Models\HealthWorkers;

class rabiesCasesController extends Controller
{
    public function index()
    {

        return view('vigep.forms.antirabico');
    }

    public function store(Request $request)
    {   
        $addresses = Addresses::create($request->all());

        $patientData = $request->all();
    $patient = Patients::updateOrcreate(
        ['patient_cpf' => $patientData['patient_cpf']],
        $patientData
    );
    $patient->get_address_id = $addresses->address_id;
    $patient->save();
    

    $healthUnit = HealthUnits::create($request->all());

    $healthWorker = HealthWorkers::create($request->all());

    $case = ModelsCases::create($request->all());
    $case->get_health_unit_id = $healthUnit->health_unit_id;
    $case->get_patient_id = $patient->patient_id;
    $case->get_address_id = $addresses->address_id;
    $case->get_patient_id = $patient->patient_id;
    $case->save();

    $rabiesCase = RabiesCases::create($request->all());
    $rabiesCase->get_case_id = $case->case_id;
    $rabiesCase->save();

    return redirect('/');
    }
    public function verifyCPF(Request $request) {
        $cpf = $request->input('patient_cpf');
        $paciente = Patients::where('patient_cpf', $cpf)->first();
    
        return response()->json($paciente);
    }
}
