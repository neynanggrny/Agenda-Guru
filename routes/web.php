<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\LoginController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('main');
});

Route::get('/guru', function () {
    return view('guru.dataguru');
});

Route::get('/kelas', function () {
    return view('kelas.datakelas');
});

Route::get('/agenda', function () {
    return view('agenda.dataagenda');
});

// GURU

Route::get('/guru', [GuruController::class, 'index'])->name('guru');

Route::get('/tambahguru', [GuruController::class, 'create'])->name('tambahguru');

Route::post('/insertdata', [GuruController::class, 'store'])->name('insertdata');

Route::get('/tampilan/{id}', [GuruController::class, 'tampilan']);

Route::put('/updatedata/{id}', [GuruController::class, 'update'])->name('updatedata');

Route::delete('/deletedata/{id}', [GuruController::class, 'destroy'])->name('deletedata');


// KELAS

Route::get('/kelas', [KelasController::class, 'index'])->name('kelas');

Route::get('/tambahkelas', [KelasController::class, 'create'])->name('tambahkelas');

Route::post('/insertdatakelas', [KelasController::class, 'store'])->name('insertdatakelas');

Route::get('/tampilankelas/{id}', [KelasController::class, 'tampilankelas']);

Route::put('/updatedatakelas/{id}', [KelasController::class, 'update'])->name('updatedatakelas');

Route::delete('/deletedatakelas/{id}', [KelasController::class, 'destroy'])->name('deletedatakelas');

// AGENDA

// Route::get('/agenda', [AgendaController::class, 'index'])->name('agenda');

// Route::get('/tambahagenda', [AgendaController::class, 'create'])->name('tambahkelas');

// Route::post('/insertagenda', [AgendaController::class, 'store'])->name('insertagenda');

Route::get('/agenda', [AgendaController::class, 'index'])->name('agenda');

Route::get('/tambahagenda', [AgendaController::class, 'create'])->name('tambahagenda');

Route::post('/insertdataagenda', [AgendaController::class, 'store'])->name('insertdataagenda');

Route::get('/tampilanagenda/{id}', [AgendaController::class, 'tampilanagenda']);

Route::put('/updatedataagenda/{id}', [AgendaController::class, 'update'])->name('updatedataagenda');

Route::delete('/deletedataagenda/{id}', [AgendaController::class, 'destroy'])->name('deletedataagenda');

// LOGIN

Route::get('/login', [LoginController::class, 'login'])->name('login');

Route::post('/loginproses', [LoginController::class, 'loginproses'])->name('loginproses');

Route::get('/register', [LoginController::class, 'register'])->name('register');

Route::post('/registeruser', [LoginController::class, 'registeruser'])->name('registeruser');