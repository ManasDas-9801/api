<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

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
Route::redirect('/', '/home');

Route::get('/home',[EmployeeController::class,"show"])->name("show");
Route::get('/search',[EmployeeController::class,"search"])->name("search");
Route::post('/employee/store',[EmployeeController::class,"store"])->name("store");
Route::get('/update/{id}', [EmployeeController::class,'update'])->name('update');
Route::post('/set', [EmployeeController::class,'set'])->name('set');

