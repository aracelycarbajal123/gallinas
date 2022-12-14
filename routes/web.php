<?php

use App\Http\Controllers\AveController;
use App\Http\Controllers\AvesController;
use App\Http\Controllers\CalendariosController;
use App\Http\Controllers\ComunidadController;
use App\Http\Controllers\ControlController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LotesController;
use App\Http\Controllers\personController;
use App\Http\Controllers\PlancalendariosController;
use App\Http\Controllers\planificacionController;
use App\Http\Controllers\PlanificationController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\vacunaController;
use App\Models\person;
use App\Models\Plancalendarios;
use App\Models\planificacion;
use GuzzleHttp\Promise\Create;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::get('/viewRegister', [LoginController::class, 'viewRegister'])->name('viewRegister');


Route::post('/login', [LoginController::class, 'autenticar']);

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


Route::get('/dashboard', [LoginController::class, 'dashboard'])->middleware('auth')->name('dashboard');


Route::get('/', [LoginController::class, 'index']);
Route::get('/aves', [AveController::class, 'index'])->middleware('auth')->name('aves');

//register
Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/register', [LoginController::class, 'store'])->name('register.store');

//user
Route::get('/users', [UserController::class,'index'])->name('users');
Route::get('/users/create', [UserController::class,'create'])->middleware('auth')->name('users.create');
Route::get('/users/{id}/edit', [UserController::class,'edit'])->middleware('auth')->name('users.edit');
Route::post('/users/create', [UserController::class,'store'])->name('users.store');
Route::put('/users/{id}', [UserController::class,'update'])->name('users.update');
Route::delete('/users/{id}', [UserController::class,'destroy'])->name('users.destroy');

//comunidades
Route::get('/comunidades', [ComunidadController::class,'index'])->middleware('auth')->name('comunidades');
Route::get('/comunidad/create', [ComunidadController::class,'create'])->middleware('auth')->name('comunidad.create');
Route::post('/comunidad/create', [ComunidadController::class,'store'])->name('comunidad.store');
Route::get('/comunidad/{id}/edit', [ComunidadController::class,'edit'])->middleware('auth')->name('comunidad.edit');
Route::put('/comunidad/{id}', [ComunidadController::class,'update'])->name('comunidad.update');
Route::delete('/comunidad/{id}', [ComunidadController::class,'destroy'])->name('comunidad.destroy');
Route::get('/comunidad/pdf', [ComunidadController::class, 'createPDF'])->name('/comunidad.crearpdf');

//Vacuna
Route::get('/vacuna',[vacunaController::class,'index'])->middleware('auth')->name('vacuna');
Route::get('/vacuna/create',[vacunaController::class, 'create'])->middleware('auth')->name('vacuna.create');
Route::post('/vacuna/create',[vacunaController::class, 'store'])->name('vacuna.store');
Route::get('/vacuna/{id}/edit', [vacunaController::class,'edit'])->middleware('auth')->name('vacuna.edit');
Route::put('/vacuna/{id}',[vacunaController::class,'update'])->name('vacuna.update');
Route::delete('/vacuna/{id}',[vacunaController::class,'destroy'])->name('vacuna.destroy');
Route::get('/vacuna/pdf', [vacunaController::class, 'createPDF'])->name('/vacuna.crearpdf');

//personas
Route::get('/person',[personController::class,'index'])->middleware('auth')->name('person');
Route::get('/person/create',[personController::class,'create'])->middleware('auth')->name('person.create');
Route::post('/person/create',[personController::class,'store'])->name('person.store');
Route::get('/person/{id}/edit',[personController::class,'edit'])->middleware('auth')->name('person.edit');
Route::put('/person/{id}',[personController::class,'update'])->name('person.update');
Route::delete('/person/{id}',[personController::class,'destroy'])->name('person.destroy');
Route::get('/person/pdf', [personController::class, 'createPDF'])->name('/person.crearpdf');
//aves
Route::get('/aves',[AvesController::class,'index'])->middleware('auth')->name('aves');
Route::get('/aves/create',[AvesController::class,'create'])->middleware('auth')->name('aves.create');
Route::post('/aves/create',[AvesController::class,'store'])->name('aves.store');
Route::get('/aves/{id}/edit', [AvesController::class,'edit'])->middleware('auth')->name('aves.edit');
Route::put('/aves/{id}',[AvesController::class,'update'])->name('aves.update');
Route::delete('/aves/{id}',[AvesController::class,'destroy'])->name('aves.destroy');
Route::get('/aves/pdf', [AvesController::class, 'createPDF'])->name('/aves.crearpdf');

//planificacion de calendarios
Route::get('/plancalendarios',[PlancalendariosController::class,'index'])->middleware('auth')->name('plancalendarios');
Route::get('/plancalendarios/create',[PlancalendariosController::class,'create'])->middleware('auth')->name('plancalendarios.create');
Route::post('/plancalendarios/create',[PlancalendariosController::class,'store'])->name('plancalendarios.store');
Route::get('/plancalendarios/{id}/edit',[PlancalendariosController::class,'edit'])->middleware('auth')->name('plancalendarios.edit');
Route::put('/Plancalendarios/{id}',[PlancalendariosController::class,'update'])->name('plancalendarios.update');
Route::delete('/Plancalendarios/{id}',[PlancalendariosController::class,'destroy'])->name('plancalendarios.destroy');
Route::get('/Plancalendarios/pdf', [PlancalendariosController::class, 'createPDF'])->name('/plancalendarios.crearpdf');

//control
Route::get('/control',[ControlController::class,'index'])->middleware('auth')->name('control');
Route::get('/control',[ControlController::class,'index'])->middleware('auth')->name('control');

Route::get('/control/create',[ControlController::class,'create'])->middleware('auth')->name('control.create');
Route::post('/control/create',[ControlController::class,'store'])->name('control.store');
Route::get('/control/{id}/edit',[ControlController::class,'edit'])->middleware('auth')->name('control.edit');
Route::put('/control/{id}',[ControlController::class,'update'])->name('control.update');
Route::delete('/control/{id}',[ControlController::class,'destroy'])->name('control.destroy');
Route::get('/control/pdf', [ControlController::class, 'createPDF'])->name('/control.crearpdf');








