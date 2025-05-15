<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\logincontroller;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\registercontroller;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
    return view('masters.master');
});
Route::get('/login', [logincontroller::class, 'index'])->name('login');
Route::post('/auth', [logincontroller::class, 'authenticate'])->name('auth');


Route::group([
    "prefix" => "/dashboard",
    "as"     => "dashboard.admin."
], function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    Route::group([
        "prefix" => "/pegawai",
        "as"     => "pegawai."
    ], function () {
        Route::get("/", [PegawaiController::class, 'index'])->name('index');
        Route::get("/create", [PegawaiController::class, 'create'])->name('create');
        Route::post("/store", [PegawaiController::class, 'store'])->name('store');
        Route::post("/delete", [PegawaiController::class, 'delete'])->name('delete');
    });
});

// Rooute::group(["prefix" => "pegawai"])
// 