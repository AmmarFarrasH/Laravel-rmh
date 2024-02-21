<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SppController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\KelasesController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;

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

Route::resource('/kelases', KelasesController::class);

Route::resource('/petugas', PetugasController::class);

Route::middleware(['guest'])->group(function () {
    Route::controller(AuthController::class)->group(function () {
        Route::get('/login', 'login')->name('auth.login');
        Route::post('/authenticate', 'authenticate')->name('auth.authenticate');
    });
    Route::controller(RegisterController::class)->group(function () {
        Route::get('/register', 'create')->name('register.create');
        Route::post('/register', 'store')->name('register.store');
    });
});

Route::middleware(['web', 'auth', 'level:admin'])
    ->get('/dashboard/admin', function () {
        return view('admin');
    })->name('admin.dashboard');

Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout')->middleware('auth');

Route::middleware(['can:isPetugas'])->group(function () {
    Route::get('/dashboard/petugas', [DashboardController::class, 'petugas'])->name('dashboard.petugas');
});

Route::middleware(['can:isAdmin'])->group(function () {
    Route::get('/dashboard/admin', [DashboardController::class, 'admin'])->name('dashboard.admin');
    Route::resource('/spp', SppController::class);
    Route::resource('/petugas', PetugasController::class);
    Route::resource('/kelas', KelasesController::class);
});
