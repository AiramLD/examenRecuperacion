<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\EmpleadoController;

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
    return view('welcome');
});

Route::resource('/empresas', EmpresaController::class);
Route::resource('/empleados', EmpleadoController::class);


Route::get('/empleados/create', [EmpleadoController::class, 'create'])->name('empleados.create');
Route::post('/empleados', [EmpleadoController::class, 'store'])->name('empleados.store');

Route::get('/empleados/mostrarEmpleadosEmpresa', [EmpleadoController::class, 'mostrarEmpleadosEmpresa'])->name('empleados.mostrarEmpleadosEmpresa');



