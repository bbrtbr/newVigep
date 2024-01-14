<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Spatie\Permission\Exceptions\UnauthorizedException;
use App\Models\Addresses, App\Models\HealthUnits;

class HealthUnitsController extends Controller
{
    public function index()
    {
        $healthUnits = HealthUnits::paginate(20);
        $addresses = Addresses::all();

        if (!auth()->user()->hasPermissionTo('Listar todos os formulários - VIGEP')) {
            throw new UnauthorizedException('403', 'Oops! Você não tem a autorização necessária.');
        } else {
            return view('vigep.healthunits.index', ['healthUnits' => $healthUnits, 'addresses' => $addresses]);
        }
    }
    public function create()
    {

        return view('vigep.healthunits.createOrEdit');
    }
    public function edit($id)
    {
        $case = HealthUnits::findOrFail($id);
       
        return view('vigep.healthunits.createOrEdit', compact('case'));
        
    }
    public function storeOrUpdateUnits(Request $request)
    {
        if ($request->has('health_unit_id')) {

            $healthUnits = HealthUnits::findOrFail($request->input('health_unit_id'));
            $healthUnits->update($request->all());
        } else {
            $healthUnits = HealthUnits::create($request->all());

            $healthUnits->save();
        }
        return redirect('/');
    }
}
