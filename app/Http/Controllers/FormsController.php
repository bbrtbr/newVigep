<?php

namespace App\Http\Controllers;

use Illuminate\Console\View\Components\Alert;
use Illuminate\Http\Request;
use App\Models\Cases as ModelsCases;
use App\Models\User;
use Spatie\Permission\Exceptions\UnauthorizedException;
use App\Models\Patients, App\Models\Addresses, App\Models\RabiesCases, App\Models\HealthUnits, App\Models\HealthWorkers;

class FormsController extends Controller
{
    public function forms()
    {

        return view('vigep.forms.index');

    }
    public function dashboard()
    {
        $user = auth()->user();
        $roles = $user->getRoleNames();
        $patients = Patients::all();
        $cases = ModelsCases::paginate(10);
        $casesCount = ModelsCases::count();
        $patientsCount = Patients::count();
        if (auth()->user()->hasPermissionTo('Listar todos os formulários - VIGEP')) {
            return view('vigep.dashVigep', ['patients' => $patients, 'cases' => $cases, 'casesCount' => $casesCount, 'patientsCount' => $patientsCount]);
        } else if ($roles) {
            $healthUnit = HealthUnits::where('health_unit_name', $roles)->first();
            $casesUnic = ModelsCases::where('get_health_unit_id', $healthUnit->health_unit_id)->paginate(10);
            $casesUnicCount = ModelsCases::where('get_health_unit_id', $healthUnit->health_unit_id)->count();
            $patientIds = $casesUnic->pluck('get_patient_id')->toArray();
            $patientsCountUnic = Patients::whereIn('patient_id', $patientIds)->count();
            return view('vigep.dashVigep', [
                'patients' => $patients,
                'cases' => $casesUnic,
                'casesCount' => $casesUnicCount,
                'patientsCount' => $patientsCountUnic
            ]);
        } else {
            throw new UnauthorizedException('403', 'Oops! Você não tem a autorização necessária.');
        }
    }
    public function verifyCPF(Request $request)
    {
        $cpf = $request->input('patient_cpf');
        $paciente = Patients::where('patient_cpf', $cpf)->first();

        return response()->json($paciente);
    }
}
