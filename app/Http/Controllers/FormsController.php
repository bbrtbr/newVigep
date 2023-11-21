<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cases as ModelsCases;
use App\Models\Patients, App\Models\Addresses, App\Models\RabiesCases, App\Models\HealthUnits, App\Models\HealthWorkers;
class FormsController extends Controller
{
    public function forms()
    {
        return view('vigep.dashVigepForms');
    }
    public function dashboard(){
        $patients = Patients::all();
        $cases = ModelsCases::paginate(10);
        return view('vigep.dashVigep', ['patients' => $patients, 'cases' => $cases]);
    }
    public function verifyCPF(Request $request) {
        $cpf = $request->input('patient_cpf');
        $paciente = Patients::where('patient_cpf', $cpf)->first();
    
        return response()->json($paciente);
    }
    
    
}
