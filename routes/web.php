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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return "About Us";
});

Route::get('employee', [EmployeeController::class, 'index']);
Route::get('/add-employee', [EmployeeController::class, 'create']);
Route::post('/store-employee', [EmployeeController::class, 'store']);
Route::get('/edit-employee/{id}',[EmployeeController::class, 'edit']);
Route::put('update-employee/{id}',[EmployeeController::class, 'update']);
Route::get('delete-employee/{id}', [EmployeeController::class, 'delete']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
