<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\AbsenceController;
use App\Http\Controllers\EmployerController;
use App\Http\Controllers\VoitureController;
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


Route::get('/abscences', [AbsenceController::class, 'index'])->name('abscences.index');
Route::get('/abscences/create', [AbsenceController::class, 'create'])->name('abscences.create');
Route::post('/abscences', [AbsenceController::class, 'store'])->name('abscences.store');
Route::get('/abscences/{abscence}', [AbsenceController::class, 'show'])->name('abscences.show');
Route::get('/abscences/{abscence}/edit', [AbsenceController::class, 'edit'])->name('abscences.edit');
Route::put('/abscences/{abscence}', [AbsenceController::class, 'update'])->name('abscences.update');
Route::delete('/abscences/{abscence}', [AbsenceController::class, 'destroy'])->name('abscences.destroy');
