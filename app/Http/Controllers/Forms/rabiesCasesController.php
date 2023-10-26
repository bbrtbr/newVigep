<?php

namespace App\Http\Controllers\Forms;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Cases as ModelsCases;
use App\Models\Patients, App\Models\Addresses, App\Models\RabiesCases, App\Models\HealthUnits;

class rabiesCasesController extends Controller
{
    public function index()
    {

        return view('forms.antirabico');
    }
    public function store(Request $request)
    {   
        
        $HealthUnits = HealthUnits::create($request->all());
        $patients = Patients::create($request->all());
        $cases = ModelsCases::create($request->all());
        $addresses = Addresses::create($request->all());
        $RabiesCases = RabiesCases::create($request->all());
        $addresses->save();

        $adressesID = $addresses->address_id;

        $patients->get_address_id = $adressesID;
        $patients->save();
        $patientID = $patients->patient_id;

        $HealthUnits->save();
        $HealthID = $HealthUnits->health_unit_id;


        $cases->get_health_unit_id =  $HealthID;
        $cases->get_patient_id = $patientID;
        $cases->get_address_id = $adressesID;
        $cases->save();
        $caseID = $cases->case_id;

        $RabiesCases->get_case_id = $caseID;
        $RabiesCases->save();
       
        return redirect('/');
    }
    public function verifyCPF(Request $request) {
        $cpf = $request->input('patient_cpf');
        $paciente = Patients::where('patient_cpf', $cpf)->first();
    
        return response()->json($paciente);
    }
}
