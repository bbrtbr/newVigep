<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cases as ModelsCases;
use Spatie\Permission\Exceptions\UnauthorizedException;
use App\Models\Patients, App\Models\Addresses, App\Models\RabiesCases, App\Models\HealthUnits, App\Models\HealthWorkers;
class FormsController extends Controller
{
    public function forms()
    {
        if (!auth()->user()->hasPermissionTo('Listar todos os formulários - VIGEP')) {
            throw new UnauthorizedException('403', 'Oops! Você não tem a autorização necessária.');
        }else{
        return view('vigep.dashVigepForms');
        }
    }
    public function dashboard(){
        $patients = Patients::all();
        $cases = ModelsCases::paginate(10);
        if (!auth()->user()->hasRole('Listar todos os formulários - VIGEP')) {
            throw new UnauthorizedException('403', 'Oops! Você não tem a autorização necessária.');
        }else{
        return view('vigep.dashVigep', ['patients' => $patients, 'cases' => $cases]);
        }
    }
    public function verifyCPF(Request $request) {
        $cpf = $request->input('patient_cpf');
        $paciente = Patients::where('patient_cpf', $cpf)->first();
    
        return response()->json($paciente);
    }
    
    
}
