<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SppController;
use App\Http\Controllers\KelasesController;
use App\Http\Controllers\PetugasController;

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

Route::get('/template', function () {
    return view('template.master');
});

// Route::get('/test', function () {
//     return view('template.test');
// });

Route::controller(SppController::class)->group(function () {
    Route::get('/spp', 'index')->name('spp.index');
    Route::get('/spp/create', 'create')->name('spp.create');
    Route::post('/spp', 'store')->name('spp.store');
    // Route::get('/spp/{id}', 'show')->name('spp.show');
    Route::get('/spp/{id}/edit', 'edit')->name('spp.edit');
    Route::put('/spp/{id}', 'update')->name('spp.update');
    Route::delete('/spp/{id}', 'destroy')->name('spp.destroy');
});


// Route::controller(KelasesController::class)->group(function () {
//     Route::get('/kelases', 'index')->name('kelases.index');
//     Route::get('/kelases/create', 'create')->name('kelases.create');
//     Route::post('/kelases', 'store')->name('kelases.store');
//     Route::get('/kelases/{kelase}', 'show')->name('kelases.show');
//     Route::get('/kelases/{kelase}/edit', 'edit')->name('kelases.edit');
//     Route::put('/kelases/{kelase}', 'update')->name('kelases.update');
//     Route::delete('/kelases/{kelase}', 'destroy')->name('kelases.destroy');
//     Route::delete('/kelases/{kelase}', [KelasesController::class, 'destroy'])->name('kelases.destroy');
// });

Route::resource('/kelases', KelasesController::class);

Route::resource('/petugas', PetugasController::class);

