<?php

namespace App\Http\Controllers;
use Database\Seeders\PermissionsTableSeeder;
use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Exceptions\UnauthorizedException;
use App\Models\Addresses, App\Models\HealthUnits;

class HealthUnitsController extends Controller
{
    public function index()
    {
        $healthUnits = HealthUnits::paginate(20);
        $addresses = Addresses::all();
        $healthUnitsCount = HealthUnits::count();
        if (!auth()->user()->hasPermissionTo('Listar todos os formulários - VIGEP')) {
            throw new UnauthorizedException('403', 'Oops! Você não tem a autorização necessária.');
        } else {
            return view('vigep.healthunits.index', [
                'healthUnits' => $healthUnits,
                'addresses' => $addresses,
                'healthUnitsCount' => $healthUnitsCount,
            ]);
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
           $user = User::create([
                'user_name' => $healthUnits->health_unit_name,
                'email' => $healthUnits->health_unit_email,
                'password' => $request->input('health_unit_password'),
                'user_status' => true,
            ]);

            $permissionsSeeder = new PermissionsTableSeeder();

            $permissionsSeeder->createUnit($healthUnits->health_unit_name);
            $user->assignRole($healthUnits->health_unit_name);
            $healthUnits->save();
        }
        return redirect('/');
    }
}
