<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DokterController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\JenisPerawatanController;

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
    return view('beranda.beranda', [
        "title" => "Beranda"
    ]);
});

Route::get('/perawatan', [JenisPerawatanController::class, 'index']);
Route::get('/perawatan/bleaching', [JenisPerawatanController::class, 'bleaching']);
Route::get('/perawatan/orthodontic', [JenisPerawatanController::class, 'bleaching']);
Route::get('/perawatan/penambalan', [JenisPerawatanController::class, 'bleaching']);
Route::get('/perawatan/pencabutan', [JenisPerawatanController::class, 'bleaching']);
Route::get('/perawatan/scaling', [JenisPerawatanController::class, 'bleaching']);


Route::get('/pembayaran', [PembayaranController::class, 'index']);

Route::get('/appointment', [AppointmentController::class, 'index']);

Route::get('/aboutUs', [AboutUsController::class, 'index'] );

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'user'])->name('user');
Route::middleware('role:admin')->get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
Route::get('/dokter', [App\Http\Controllers\HomeController::class, 'dokter'])->name('dokter');

Route::resource('/dashboard/kupon', KuponController::class)->middleware('auth');
