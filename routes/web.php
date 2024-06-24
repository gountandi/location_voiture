<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\AbsenceController;
use App\Http\Controllers\EmployerController;
use App\Http\Controllers\VehiculeController;
use App\Http\Controllers\RetardController;
use App\Http\Controllers\PersonneController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\ClientController;
/*use App\Http\Controllers\HomeController;*/


/* Personne routes*/


Route::get('/personnes', [PersonneController::class, 'index'])->name('personnes.index');
Route::get('/personnes/create', [PersonneController::class, 'create'])->name('personnes.create');
Route::post('/personnes', [PersonneController::class, 'store'])->name('personnes.store');
Route::get('/personnes/{personne}', [PersonneController::class, 'show'])->name('personnes.show');
Route::get('/personnes/{personne}/edit', [PersonneController::class, 'edit'])->name('personnes.edit');
Route::put('/personnes/{personne}', [PersonneController::class, 'update'])->name('personnes.update');
Route::delete('/personnes/{personne}', [PersonneController::class, 'destroy'])->name('personnes.destroy');


/* Employer routes*/


Route::get('/employers', [EmployerController::class, 'index'])->name('employers.index');
Route::get('/employers/create', [EmployerController::class, 'create'])->name('employers.create');
Route::post('/employers', [EmployerController::class, 'store'])->name('employers.store');
Route::get('/employers/{employer}', [EmployerController::class, 'show'])->name('employers.show');
Route::get('/employers/{employer}/edit', [EmployerController::class, 'edit'])->name('employers.edit');
Route::put('/employers/{employer}', [EmployerController::class, 'update'])->name('employers.update');
Route::delete('/employers/{employer}', [EmployerController::class, 'destroy'])->name('employers.destroy');





/* Abscences routes*/


Route::get('/abscences', [AbsenceController::class, 'index'])->name('abscences.index');
Route::get('/abscences/create', [AbsenceController::class, 'create'])->name('abscences.create');
Route::post('/abscences', [AbsenceController::class, 'store'])->name('abscences.store');
Route::get('/abscences/{abscence}', [AbsenceController::class, 'show'])->name('abscences.show');
Route::get('/abscences/{abscence}/edit', [AbsenceController::class, 'edit'])->name('abscences.edit');
Route::put('/abscences/{abscence}', [AbsenceController::class, 'update'])->name('abscences.update');
Route::delete('/abscences/{abscence}', [AbsenceController::class, 'destroy'])->name('abscences.destroy');


/* Vehicule routes*/


Route::get('/vehicules', [VehiculeController::class, 'index'])->name('vehicules.index');
Route::get('/vehicules/create', [VehiculeController::class, 'create'])->name('vehicules.create');
Route::post('/vehicules', [VehiculeController::class, 'store'])->name('vehicules.store');
Route::get('/vehicules/{vehicule}', [VehiculeController::class, 'show'])->name('vehicules.show');
Route::get('/vehicules/{vehicule}/edit', [VehiculeController::class, 'edit'])->name('vehicules.edit');
Route::put('/vehicules/{vehicule}', [VehiculeController::class, 'update'])->name('vehicules.update');
Route::delete('/vehicules/{vehicule}', [VehiculeController::class, 'destroy'])->name('vehicules.destroy');



/* clients routes*/


Route::get('/clients', [ClientController::class, 'index'])->name('clients.index');
Route::get('/clients/create', [ClientController::class, 'create'])->name('clients.create');
Route::post('/clients', [ClientController::class, 'store'])->name('clients.store');
Route::get('/clients/{client}', [ClientController::class, 'show'])->name('clients.show');
Route::get('/clients/{client}/edit', [ClientController::class, 'edit'])->name('clients.edit');
Route::put('/clients/{client}', [ClientController::class, 'update'])->name('clients.update');
Route::delete('/clients/{client}', [ClientController::class, 'destroy'])->name('clients.destroy');


/* Locations routes*/


Route::get('/locations', [LocationController::class, 'index'])->name('locations.index');
Route::get('/locations/create', [LocationController::class, 'create'])->name('locations.create');
Route::post('/locations', [LocationController::class, 'store'])->name('locations.store');
Route::get('/locations/{location}', [LocationController::class, 'show'])->name('locations.show');
Route::get('/locations/{location}/edit', [LocationController::class, 'edit'])->name('locations.edit');
Route::put('/locations/{location}', [LocationController::class, 'update'])->name('locations.update');
Route::delete('/locations/{location}', [LocationController::class, 'destroy'])->name('locations.destroy');



/* retards routes*/


Route::get('/retards', [RetardController::class, 'index'])->name('retards.index');
Route::get('/retards/create', [RetardController::class, 'create'])->name('retards.create');
Route::post('/retards', [RetardController::class, 'store'])->name('retards.store');
Route::get('/retards/{retard}', [RetardController::class, 'show'])->name('retards.show');
Route::get('/retards/{retard}/edit', [RetardController::class, 'edit'])->name('retards.edit');
Route::put('/retards/{retard}', [RetardController::class, 'update'])->name('retards.update');
Route::delete('/retards/{retard}', [RetardController::class, 'destroy'])->name('retards.destroy');
