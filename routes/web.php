<?php

//use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ACL\RoleController;
use App\Http\Controllers\ACL\PermissionController;
use App\Http\Controllers\FormsController;
use App\Http\Controllers\Forms\rabiesCasesController;
use App\Http\Controllers\Forms\tuberculoseCasesController;
use App\Http\Controllers\HealthUnitsController;
use App\Http\Controllers\HealthWorkerController;
use App\Models\HealthUnits;
use App\Http\Controllers\Forms\malariaCasesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');



Route::middleware('auth')->group(function () {
    /** Usuários */
    Route::get('users/load', [UserController::class, 'loadDataTable'])->name('users.load');
    Route::get('users/profile/{user}', [UserController::class, 'profile'])->name('users.profile');
    Route::put('users/updateProfile/{user}', [UserController::class, 'updateProfile'])->name('users.updateProfile');
    Route::post('users/{user}/active', [UserController::class, 'activeUser'])->name('users.active');
    Route::post('users/deactivate/{user}', [UserController::class, 'deactivateUser'])->name('users.deactivate');
    Route::resource('users', UserController::class);

    /** Perfis */
    Route::get('roles/load', [RoleController::class, 'loadDataTable'])->name('roles.load');
    Route::get('roles/{role}/permissions', [RoleController::class, 'permissions'])->name('roles.permissions');
    Route::put('roles/{role}/permissions/sync', [RoleController::class, 'permissionsSync'])->name('roles.permissionsSync');
    Route::resource('roles', RoleController::class);
    /** Permissões */
    Route::get('permissions/load', [PermissionController::class, 'loadDataTable'])->name('permissions.load');
    Route::resource('permissions', PermissionController::class);
    /**Unidades de saúde - VIGEP */
    Route::get('vigep/healthunits', [HealthUnitsController::class, 'index'])->name('vigep.healthunits');
    Route::get('vigep/healthunits/create', [HealthUnitsController::class, 'create']);
    Route::get('vigep/healthunits/{id}/edit', [HealthUnitsController::class, 'edit']);
    Route::post('vigep/healthunits', [HealthUnitsController::class, 'storeOrUpdateUnits'])->name('vigep.healthunits.storeOrUpdate');
    /**Funcionários - VIGEP */
    Route::get('vigep/healthworker', [HealthWorkerController::class, 'index'])->name('vigep.healthworker');
    Route::get('vigep/healtworker/create', [HealthWorkerController::class, 'create']);
    Route::post('vigep/healthworker', [HealthWorkerController::class, 'storeOrUpdateUnits'])->name('vigep.healthworker.storeOrUpdate');
    /** Formulários - VIGEP */
    Route::get('vigep', [FormsController::class, 'dashboard'])->name('vigep.index');
    Route::get('vigep/forms', [FormsController::class, 'forms'])->name('vigep.forms');
    Route::get('vigep/verifyCPF', [FormsController::class, 'verifyCPF']);
    /** Formulários - RABIES CASES */
    Route::get('vigep/forms/antirabico', [rabiesCasesController::class, 'index']);
    Route::post('/vigep/rabiescases/storeOrUpdate', [rabiesCasesController::class, 'storeOrUpdate'])->name('vigep.rabiescases.storeOrUpdate');
    Route::get('vigep/rabiescases/{id}/edit', [RabiesCasesController::class, 'edit']);
    /** Formulários - Tuberculose */
    Route::get('vigep/forms/tuberculose', [tuberculoseCasesController::class, 'index']);
    Route::post('/vigep/rabiescases', [tuberculoseCasesController::class, 'storeOrUpdate'])->name('vigep.tuberculoseCases.storeOrUpdate');
    Route::get('vigep/tuberculose/{id}/edit', [tuberculoseCasesController::class, 'edit']);
    /** Formulários - Malaria CASES */
    Route::get('vigep/forms/malaria', [malariaCasesController::class, 'index']);
    Route::post('/vigep/malaria/storeOrUpdate', [malariaCasesController::class, 'storeOrUpdate'])->name('vigep.malariaCases.storeOrUpdate');
    Route::get('vigep/malaria/{id}/edit', [malariaCasesController::class, 'edit']);
});

require __DIR__ . '/auth.php';
