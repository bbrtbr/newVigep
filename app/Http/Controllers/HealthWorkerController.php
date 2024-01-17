<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Spatie\Permission\Exceptions\UnauthorizedException;
use App\Models\Addresses, App\Models\HealthWorkers;

class HealthWorkerController extends Controller
{
    public function index()
    {
        $healthWorker = HealthWorkers::paginate(20);
        
        $healthWorkerCount = HealthWorkers::count();
        if (!auth()->user()->hasPermissionTo('Listar todos os formulários - VIGEP')) {
            throw new UnauthorizedException('403', 'Oops! Você não tem a autorização necessária.');
        } else {
            return view('vigep.healthworkers.index', [
                'healthWorkers' => $healthWorker,
                'healthworkerCount' =>  $healthWorkerCount,
            ]);
        }
    }
    public function create()
    {

        return view('vigep.healthworker.createOrEdit');
    }
    public function edit($id)
    {
        $case = HealthWorkers::findOrFail($id);

        return view('vigep.healthworker.createOrEdit', compact('case'));
    }
    public function storeOrUpdateUnits(Request $request)
    {
        if ($request->has('health_unit_id')) {

            $healthWork = HealthWorkers::findOrFail($request->input('health_unit_id'));
            $healthWork->update($request->all());
        } else {
            $healthWork = HealthWorkers::create($request->all());

            $healthWork->save();
        }
        return redirect('/');
    }
}