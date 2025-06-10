<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\BackEndController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Employee\EmployeeController;
use App\Http\Controllers\OrderC;
use App\Http\Controllers\ProductC;
use App\Http\Controllers\RuanganC;
use App\Http\Controllers\Student\StudentController;

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



Route::get('/', [FrontEndController::class, 'index']);

//backend
Route::get('/dashboard', [BackEndController::class, 'dashboard'])->middleware('auth');


//people

//student
Route::get('/dashboard/student', [StudentController::class, 'index'])->middleware('auth')->name('student');
Route::get('/dashboard/student/add', [StudentController::class, 'form'])->middleware('auth');
Route::post('/dashboard/student/add', [StudentController::class, 'store'])->name('student.store');

//student
Route::get('/dashboard/employee', [EmployeeController::class, 'index'])->middleware('auth')->name('employee');
Route::get('/dashboard/employee/add', [EmployeeController::class, 'form'])->middleware('auth');
Route::post('/dashboard/employee/add', [EmployeeController::class, 'store'])->name('employee.store');



//component
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [BackEndController::class, 'dashboard']);
    Route::get('/dashboard/form', [BackEndController::class, 'form']);
    Route::get('/dashboard/invoice', [BackEndController::class, 'invoice']);
    Route::get('/dashboard/table', [BackEndController::class, 'table']);
    Route::get('/dashboard/blank', [BackEndController::class, 'blank']);
    Route::get('/dashboard/login', [BackEndController::class, 'login']);
    Route::get('/dashboard/register', [BackEndController::class, 'register']);
    Route::get('/dashboard/modal', [BackEndController::class, 'modal']);
});



//authentication
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginStore'])->name('login.store');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'registerStore'])->name('register.store');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::group([
    'prefix' => 'room-management',
    'as'     => 'room_management.'
], function () {
    Route::get('/room', [RuanganC::class, 'index'])->name('room.index');
    Route::post('/room/store', [RuanganC::class, 'store'])->name('room.store');
    Route::get('/room/create', [RuanganC::class, 'create'])->name('room.create');
    Route::post('/room/chooseEmployee', [RuanganC::class, 'employeeToRoom'])->name('room.employeeToRoom');
    Route::get('/room/view', [RuanganC::class, 'viewEmployeeToRoom'])->name('room.viewEmployeeToRoom');
});

Route::group([
    'prefix' => 'product-management',
    'as'     => 'product_management.'
], function () {
    Route::get('/product', [ProductC::class, 'index'])->name('product.index');
    Route::post('/product/store', [ProductC::class, 'store'])->name('product.store');
    Route::get('/product/create', [ProductC::class, 'create'])->name('product.create');
});

//order
Route::group([
    'prefix' => "/order",
    'as'     => "order."
], function () {
    Route::get("/", [OrderC::class, 'index'])->name('index');
    Route::get("/tampilM", [OrderC::class, 'tampilM'])->name('tampilM');
    Route::get("/tampilP", [OrderC::class, 'tampilP'])->name('tampilP');
    Route::post('/{id}/accept', [OrderC::class, 'accept'])->name('accept');
    Route::post('/{id}/decline', [OrderC::class, 'decline'])->name('decline');
    Route::post('/{id}/done', [OrderC::class, 'done'])->name('done');
    Route::post('/process', [OrderC::class, 'order'])->name('process');
    Route::get('/history', [OrderC::class, 'history'])->name('history');
    Route::get('/order/manage', [OrderC::class, 'manage'])->name('order.manage');
    Route::get('/order/history/export', [OrderC::class, 'export'])->name('order.export');
    Route::get('/order/history/export-excel', [OrderC::class, 'exportExcel'])->name('order.export.excel');
    Route::post('/history/clear/student', [OrderC::class, 'clearHistoryStudent'])->name('order.history.clear.student');
    Route::post('/history/clear/employee', [OrderC::class, 'clearHistoryEmployee'])->name('order.history.clear.employee');
    Route::get('/order/history/employee', [OrderC::class, 'employeeHistory'])->name('order.history.employee');
});
