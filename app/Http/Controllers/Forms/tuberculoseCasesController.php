<?php

namespace App\Http\Controllers\Forms;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Cases as ModelsCases;
use Spatie\Permission\Exceptions\UnauthorizedException;
use App\Models\Patients, App\Models\Addresses, App\Models\TuberculoseCases, App\Models\HealthUnits, App\Models\HealthWorkers;

class tuberculoseCasesController extends Controller
{
    public function index()
    {
        if (!auth()->user()->hasPermissionTo('Listar todos os formulários - VIGEP')) {
            throw new UnauthorizedException('403', 'Oops! Você não tem a autorização necessária.');
        }else{
        return view('vigep.forms.tuberculose');
        }
    }

    public function storeOrUpdate(Request $request)
    {

        if ($request->has('case_id')) {

            $case = ModelsCases::findOrFail($request->input('case_id'));
            $case->update($request->all());
        } else {

            $addresses = Addresses::create($request->all());

            $patientData = $request->all();
            $patient = Patients::updateOrCreate(
                ['patient_cpf' => $patientData['patient_cpf']],
                $patientData
            );
            $healthWorkerData = $request->all();
            $healthWorker = HealthWorkers::updateOrCreate(
                ['health_worker_registration' => $healthWorkerData['health_worker_registration']],
                $healthWorkerData
            );

            $patient->get_address_id = $addresses->address_id;
            $patient->save();

            $healthUnit = HealthUnits::create($request->all());

            //$healthWorker = HealthWorkers::create($request->all());

            $case = ModelsCases::create($request->all());
            $case->get_health_worker_id = $healthWorker->health_worker_id;
            $case->get_health_unit_id = $healthUnit->health_unit_id;
            $case->get_patient_id = $patient->patient_id;
            $case->get_address_id = $addresses->address_id;
            $case->get_patient_id = $patient->patient_id;
            $case->case_status = 'Análise';
            $case->save();
            $healthWorker->save();
            $tuberculoseCases = TuberculoseCases::create($request->all());
            $tuberculoseCases->get_case_id = $case->case_id;
            $tuberculoseCases->save();
        }

        return redirect('/');
    }
    //f

    public function edit($id)
    {
        $case = ModelsCases::findOrFail($id);
        $tuberculoseCases = TuberculoseCases::where('get_case_id', $id)->first();
        return view('vigep.forms.tuberculose', compact('case', 'tuberculoseCase'));
    }
}