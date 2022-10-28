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


Route::get('/dashboard', [LoginController::class, 'dashboard'])->name('dashboard');


Route::get('/', [LoginController::class, 'index']);
Route::get('/aves', [AveController::class, 'index'])->name('aves');

//register
Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/register', [LoginController::class, 'store'])->name('register.store');

//user
Route::get('/users', [UserController::class,'index'])->name('users');
Route::get('/users/create', [UserController::class,'create'])->name('users.create');
Route::get('/users/{id}/edit', [UserController::class,'edit'])->name('users.edit');
Route::put('/users/{id}', [UserController::class,'update'])->name('users.update');
Route::delete('/users/{id}', [UserController::class,'destroy'])->name('users.destroy');

//comunidades
Route::get('/comunidades', [ComunidadController::class,'index'])->name('comunidades');
Route::get('/comunidad/create', [ComunidadController::class,'create'])->name('comunidad.create');
Route::post('/comunidad/create', [ComunidadController::class,'store'])->name('comunidad.store');
Route::get('/comunidad/{id}/edit', [ComunidadController::class,'edit'])->name('comunidad.edit');
Route::put('/comunidad/{id}', [ComunidadController::class,'update'])->name('comunidad.update');
Route::delete('/comunidad/{id}', [ComunidadController::class,'destroy'])->name('comunidad.destroy');

//Vacuna
Route::get('/vacuna',[vacunaController::class,'index'])->name('vacuna');
Route::get('/vacuna/create',[vacunaController::class, 'create'])->name('vacuna.create');
Route::post('/vacuna/create',[vacunaController::class, 'store'])->name('vacuna.store');
Route::get('/vacuna/{id}/edit', [vacunaController::class,'edit'])->name('vacuna.edit');
Route::put('/vacuna/{id}',[vacunaController::class,'update'])->name('vacuna.update');
Route::delete('/vacuna/{id}',[vacunaController::class,'destroy'])->name('vacuna.destroy');

//personas
Route::get('/person',[personController::class,'index'])->name('person');
Route::get('/person/create',[personController::class,'create'])->name('person.create');
Route::post('/person/create',[personController::class,'store'])->name('person.store');
Route::get('/person/{id}/edit',[personController::class,'edit'])->name('person.edit');
Route::put('/person/{id}',[personController::class,'update'])->name('person.update');
Route::delete('/person/{id}',[personController::class,'destroy'])->name('person.destroy');
//aves
Route::get('/aves',[AvesController::class,'index'])->name('aves');
Route::get('/aves/create',[AvesController::class,'create'])->name('aves.create');
Route::post('/aves/create',[AvesController::class,'store'])->name('aves.store');
Route::get('/aves/{id}/edit', [AvesController::class,'edit'])->name('aves.edit');
Route::put('/aves/{id}',[AvesController::class,'update'])->name('aves.update');
Route::delete('/aves/{id}',[AvesController::class,'destroy'])->name('aves.destroy');

//planificacion de calendarios
Route::get('/plancalendarios',[PlancalendariosController::class,'index'])->name('plancalendarios');
Route::get('/plancalendarios/create',[PlancalendariosController::class,'create'])->name('plancalendarios.create');
Route::post('/plancalendarios/create',[PlancalendariosController::class,'store'])->name('plancalendarios.store');
Route::get('/plancalendarios/{id}/edit',[PlancalendariosController::class,'edit'])->name('plancalendarios.edit');
Route::put('/Plancalendarios/{id}',[PlancalendariosController::class,'update'])->name('plancalendarios.update');
Route::delete('/Plancalendarios/{id}',[PlancalendariosController::class,'destroy'])->name('plancalendarios.destroy');

//control
Route::get('/control',[ControlController::class,'index'])->name('control');
Route::get('/control/create',[ControlController::class,'create'])->name('control.create');
Route::post('/control/create',[ControlController::class,'store'])->name('control.store');
Route::get('/control/{id}/edit',[ControlController::class,'edit'])->name('control.edit');
Route::put('/control/{id}',[ControlController::class,'update'])->name('control.update');
Route::delete('/control/{id}',[ControlController::class,'destroy'])->name('control.destroy');








