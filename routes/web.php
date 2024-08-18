<?php

use App\Http\Controllers\TipoEmpleadoController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ParadaController;
use App\Http\Controllers\PqrsController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RolUsuarioController;
use App\Http\Controllers\RutaController;
use App\Http\Controllers\TipoRutaController;
use App\Http\Controllers\TipoVehiculoController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VehiculoController;
use App\Http\Controllers\ViajeController;
use App\Models\Vehiculo;
use App\Http\Controllers\PqrController;
use App\Http\Controllers\ConductorController;
use App\Http\Controllers\ClienteController2;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestEmail;
use App\Http\Controllers\AuditorController;


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

// traer la vista de la pagina principal que esta en la carpeta views/main/index.blade.php
Route::get('/send-test-email', function () {
    Mail::to('auditorjr429@gmail.com')->send(new TestEmail());
    return 'Correo de prueba enviado!';
});

Route::middleware(['auth', 'Admin'])->group(function () {
    Route::get('/CuentaAdmin', function () {
        $vehiculos = Vehiculo::all();
        return view('cuenta_Admin.indexAdmin', compact('vehiculos'));
    })->name('CuentaAdmin');
    Route::resource('/vehiculos', VehiculoController::class);
    Route::resource('/clientes', ClienteController::class);
    Route::resource('/empleados', EmpleadoController::class);
    Route::resource('/rutasyhorarios', RutaController::class);
    Route::resource('/rolUsuario', RolUsuarioController::class);
    Route::resource('/paradas', ParadaController::class);
    Route::resource('/tipoEmpleado', TipoEmpleadoController::class);
    Route::resource('/tipoRuta', TipoRutaController::class);
    Route::resource('/tipoVehiculo', TipoVehiculoController::class);
    Route::resource('/viajes', ViajeController::class);
    Route::resource('/pqrs', PqrsController::class)->except(['create','store']);
    Route::resource('/usuarios', UserController::class);

    Route::get('downloadVehiculo-pdf', '\App\Http\controllers\VehiculoController@generar_pdf')->name('descargarVehiculos-pdf');
    // Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
});

Route::middleware(['auth', 'Cliente'])->group(function () {

    /*Route::get('/CuentaCliente', function () {
        return view('indexUsuario');
    })->name('CuentaCliente');*/
    Route::get('/CuentaCliente',[ClienteController2::class, 'index'])->name('CuentaCliente');
    Route::get('/Retrasos',[ClienteController2::class, 'retrasos'])->name('retrasos');
    // Ruta para PQRS
    Route::get('/agregar-pqr', [PqrController::class, 'showForm'])->name('pqr');
    Route::post('/agregar-pqr', [PqrController::class, 'store'])->name('pqr.store');
    Route::get('/mis-pqr', [PqrController::class, 'index'])->name('pqr.index');
});

Route::middleware(['auth', 'Empleado'])->group(function () {
    /*Route::get('/CuentaEmpleado', function () {
        return view('indexEmpleado');
    })->name('CuentaEmpleado');*/
    Route::get('/CuentaEmpleado', [ConductorController::class, 'index'])->name('conductor.index');
    Route::post('/conductor/notificar', [ConductorController::class, 'notificar'])->name('notificar');

});

Route::middleware(['auth', 'Auditor'])->group(function () {
    Route::get('/CuentaAuditor', [AuditorController::class, 'index'])->name('CuentaAuditor');
});


Route::middleware(['guest'])->group(function () {
    // Route::view('/conocernos', 'conocernos');
    // Route::view('/rutas', 'rutas');
    Route::resource('/pqrs', PqrsController::class)->only(['store','create']);
    Route::view('/registro', 'registro.registro')->name('registro');
    Route::view('/ingreso', 'ingreso.ingreso')->name('ingreso');
    Route::post('/validar-registro', [RegisterController::class, 'store'])->name('validar-registro');
    Route::post('/iniciar-sesion', [LoginController::class, 'authenticate'])->name('iniciar-sesion');
});



// No restriccion
Route::resource('/contactanos', PqrsController::class);
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::view('/conocernos','conocernos')->name('conocernos');
Route::view('/rutas','rutas')->name('rutas');
Route::get('/', function () {
    return view('index');
})->name('index');






