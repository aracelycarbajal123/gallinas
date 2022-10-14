<?php

use App\Http\Controllers\AveController;
use App\Http\Controllers\AvesController;
use App\Http\Controllers\CalendariosController;
use App\Http\Controllers\ComunidadController;
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

Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/register', [LoginController::class, 'store']);

Route::get('/users', [UserController::class,'index'])->name('users');
Route::get('/users/create', [UserController::class,'create'])->name('users.create');

Route::get('/comunidades', [ComunidadController::class,'index'])->name('comunidades');
Route::get('/comunidad/create', [ComunidadController::class,'create'])->name('comunidad.create');
Route::post('/comunidad/create', [ComunidadController::class,'store'])->name('comunidad.store');

Route::get('/vacuna',[vacunaController::class,'index'])->name('vacuna');
Route::get('/vacuna/create',[vacunaController::class, 'create'])->name('vacuna.create');
Route::post('/vacuna/create',[vacunaController::class, 'store'])->name('vacuna.store');


Route::get('/person',[personController::class,'index'])->name('person');
Route::get('/person/create',[personController::class,'create'])->name('person.create');
Route::post('/person/create',[personController::class,'store'])->name('person.store');


Route::get('/aves',[AvesController::class,'index'])->name('aves');
Route::get('/aves/create',[AvesController::class,'create'])->name('aves.create');
Route::post('/aves/create',[AvesController::class,'store'])->name('aves.store');

Route::get('/plancalendarios',[PlancalendariosController::class,'index'])->name('plancalendarios');
Route::get('/plancalendarios/create',[PlancalendariosController::class,'create'])->name('plancalendarios.create');
Route::post('/plancalendarios/create',[PlancalendariosController::class,'store'])->name('plancalendarios.store');




