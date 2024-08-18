<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ParadaController;
use App\Http\Controllers\PqrsController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RolUsuarioController;
use App\Http\Controllers\RutaController;
use App\Http\Controllers\TipoEmpleadoController;
use App\Http\Controllers\TipoRutaController;
use App\Http\Controllers\TipoVehiculoController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ViajeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuditorController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

//  Route::middleware(/*['auth', 'Admin']*/)->group(function () {

    //     Route::get('/CuentaAdmin', function () {
    //         $vehiculos = Vehiculo::all();
    //         return view('cuenta_Admin.indexAdmin', compact('vehiculos'));
    //     })->name('CuentaAdmin');
    //     Route::resource('/vehiculos', VehiculoController::class);

    Route::resource('/auditores', AuditorController::class)->names([
        'index' => 'api.auditores.index',
        'show' => 'api.auditores.show',
        'create' => 'api.auditores.create',
        'store' => 'api.auditores.store',
        'edit' => 'api.auditores.edit',
        'update' => 'api.auditores.update',
        'destroy' => 'api.auditores.destroy'
    ]);

    Route::resource('/clientes', ClienteController::class)->names([
        'index' => 'api.clientes.index',
        'show' => 'api.clientes.show',
        'create' => 'api.clientes.create',
        'store' => 'api.clientes.store',
        'edit' => 'api.clientes.edit',
        'update' => 'api.clientes.update',
        'destroy' => 'api.clientes.destroy'
    ]);

    Route::resource('/empleados', EmpleadoController::class)->names([
        'index' => 'api.empleados.index',
        'show' => 'api.empleados.show',
        'create' => 'api.empleados.create',
        'store' => 'api.empleados.store',
        'edit' => 'api.empleados.edit',
        'update' => 'api.empleados.update',
        'destroy' => 'api.empleados.destroy'
    ]);

    Route::resource('/rutasyhorarios', RutaController::class)->names([
        'index' => 'api.rutasyhorarios.index',
        'show' => 'api.rutasyhorarios.show',
        'create' => 'api.rutasyhorarios.create',
        'store' => 'api.rutasyhorarios.store',
        'edit' => 'api.rutasyhorarios.edit',
        'update' => 'api.rutasyhorarios.update',
        'destroy' => 'api.rutasyhorarios.destroy'
    ]);

    Route::resource('/rolUsuario', RolUsuarioController::class)->names([
        'index' => 'api.rolUsuario.index',
        'show' => 'api.rolUsuario.show',
        'create' => 'api.rolUsuario.create',
        'store' => 'api.rolUsuario.store',
        'edit' => 'api.rolUsuario.edit',
        'update' => 'api.rolUsuario.update',
        'destroy' => 'api.rolUsuario.destroy'
    ]);

    Route::resource('/paradas', ParadaController::class)->names([
        'index' => 'api.paradas.index',
        'show' => 'api.paradas.show',
        'create' => 'api.paradas.create',
        'store' => 'api.paradas.store',
        'edit' => 'api.paradas.edit',
        'update' => 'api.paradas.update',
        'destroy' => 'api.paradas.destroy'
    ]);

    Route::resource('/tipoEmpleado', TipoEmpleadoController::class)->names([
        'index' => 'api.tipoEmpleado.index',
        'show' => 'api.tipoEmpleado.show',
        'create' => 'api.tipoEmpleado.create',
        'store' => 'api.tipoEmpleado.store',
        'edit' => 'api.tipoEmpleado.edit',
        'update' => 'api.tipoEmpleado.update',
        'destroy' => 'api.tipoEmpleado.destroy'
    ]);

    Route::resource('/tipoRuta', TipoRutaController::class)->names([
        'index' => 'api.tipoRuta.index',
        'show' => 'api.tipoRuta.show',
        'create' => 'api.tipoRuta.create',
        'store' => 'api.tipoRuta.store',
        'edit' => 'api.tipoRuta.edit',
        'update' => 'api.tipoRuta.update',
        'destroy' => 'api.tipoRuta.destroy'
    ]);

    Route::resource('/tipoVehiculo', TipoVehiculoController::class)->names([
        'index' => 'api.tipoVehiculo.index',
        'show' => 'api.tipoVehiculo.show',
        'create' => 'api.tipoVehiculo.create',
        'store' => 'api.tipoVehiculo.store',
        'edit' => 'api.tipoVehiculo.edit',
        'update' => 'api.tipoVehiculo.update',
        'destroy' => 'api.tipoVehiculo.destroy'
    ]);

    Route::resource('/tipoVehiculo', TipoVehiculoController::class)->names([
        'index' => 'api.tipoVehiculo.index',
        'show' => 'api.tipoVehiculo.show',
        'create' => 'api.tipoVehiculo.create',
        'store' => 'api.tipoVehiculo.store',
        'edit' => 'api.tipoVehiculo.edit',
        'update' => 'api.tipoVehiculo.update',
        'destroy' => 'api.tipoVehiculo.destroy'
    ]);

    Route::resource('/viajes', ViajeController::class)->names([
        'index' => 'api.viajes.index',
        'show' => 'api.viajes.show',
        'create' => 'api.viajes.create',
        'store' => 'api.viajes.store',
        'edit' => 'api.viajes.edit',
        'update' => 'api.viajes.update',
        'destroy' => 'api.viajes.destroy'
    ]);

    Route::resource('/pqrs', PqrsController::class)->names([
        'index' => 'api.pqrs.index',
        'show' => 'api.pqrs.show',
        'create' => 'api.pqrs.create',
        'store' => 'api.pqrs.store',
        'edit' => 'api.pqrs.edit',
        'update' => 'api.pqrs.update',
        'destroy' => 'api.pqrs.destroy'
    ]);

    Route::resource('/usuarios', UserController::class)->names([
        'index' => 'api.usuarios.index',
        'show' => 'api.usuarios.show',
        'create' => 'api.usuarios.create',
        'store' => 'api.usuarios.store',
        'edit' => 'api.usuarios.edit',
        'update' => 'api.usuarios.update',
        'destroy' => 'api.usuarios.destroy'
    ]);

    Route::get('downloadVehiculo-pdf', '\App\Http\controllers\VehiculoController@generar_pdf')->name('api.descargarVehiculos-pdf');

    //     // Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
// });


// Route::middleware(['guest'])->group(function () {

//     // Route::view('/conocernos', 'conocernos');
//     // Route::view('/rutas', 'rutas');

//     Route::resource('/pqrs', PqrsController::class)->only(['store','create']);

//     Route::view('/registro', 'registro.registro')->name('registro');
//     Route::view('/ingreso', 'ingreso.ingreso')->name('ingreso');
    Route::post('/validar-registro', [RegisterController::class, 'store'])->name('api.validar-registro');
    Route::post('/iniciar-sesion', [LoginController::class, 'authenticate'])->name('api.iniciar-sesion');
// });

// // No restriccion
// Route::resource('/contactanos', PqrsController::class);
Route::get('/logout', [LoginController::class, 'logout'])->name('api.logout');

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
