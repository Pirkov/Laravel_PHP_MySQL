<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
Route::get('/home', function () {return view('home');});
// Route::get('/welcome', function () {return view('welcome');});


//srart client
Route::get('/client', [App\Http\Controllers\ClientController::class, 'index'])->name('client.client');
Route::get('/client/create', [App\Http\Controllers\ClientController::class, 'create'])->name('client.create');
Route::post('/client', [App\Http\Controllers\ClientController::class, 'store'])->name('client.store');
Route::get('/client/{client}/edit', [App\Http\Controllers\ClientController::class, 'edit'])->name('client.edit');
Route::patch('/client/{client}', [App\Http\Controllers\ClientController::class, 'update'])->name('client.update');
Route::delete('/client/{client}', [App\Http\Controllers\ClientController::class, 'destroy'])->name('client.delete');
//end client

//srart role
Route::get('/role', [App\Http\Controllers\RoleController::class, 'index'])->name('role.role');
Route::get('/role/create', [App\Http\Controllers\RoleController::class, 'create'])->name('role.create');
Route::post('/role', [App\Http\Controllers\RoleController::class, 'store'])->name('role.store');
Route::get('/role/{role}/edit', [App\Http\Controllers\RoleController::class, 'edit'])->name('role.edit');
Route::patch('/role/{role}', [App\Http\Controllers\RoleController::class, 'update'])->name('role.update');
Route::delete('/role/{role}', [App\Http\Controllers\RoleController::class, 'destroy'])->name('role.delete');
//end role

//srart status
Route::get('/status', [App\Http\Controllers\StatusController::class, 'index'])->name('status.status');
Route::get('/status/create', [App\Http\Controllers\StatusController::class, 'create'])->name('status.create');
Route::post('/status', [App\Http\Controllers\StatusController::class, 'store'])->name('status.store');
Route::get('/status/{status}/edit', [App\Http\Controllers\StatusController::class, 'edit'])->name('status.edit');
Route::patch('/status/{status}', [App\Http\Controllers\StatusController::class, 'update'])->name('status.update');
Route::delete('/status/{status}', [App\Http\Controllers\StatusController::class, 'destroy'])->name('status.delete');
//end status

//srart payment
Route::get('/payment', [App\Http\Controllers\PaymentController::class, 'index'])->name('payment.payment');
Route::get('/payment/create', [App\Http\Controllers\PaymentController::class, 'create'])->name('payment.create');
Route::post('/payment', [App\Http\Controllers\PaymentController::class, 'store'])->name('payment.store');
Route::get('/payment/{payment}/edit', [App\Http\Controllers\PaymentController::class, 'edit'])->name('payment.edit');
Route::patch('/payment/{payment}', [App\Http\Controllers\PaymentController::class, 'update'])->name('payment.update');
Route::delete('/payment/{payment}', [App\Http\Controllers\PaymentController::class, 'destroy'])->name('payment.delete');
//end payment

//srart citie
Route::get('/citie', [App\Http\Controllers\CitieController::class, 'index'])->name('citie.citie');
Route::get('/citie/create', [App\Http\Controllers\CitieController::class, 'create'])->name('citie.create');
Route::post('/citie', [App\Http\Controllers\CitieController::class, 'store'])->name('citie.store');
Route::get('/citie/{citie}/edit', [App\Http\Controllers\CitieController::class, 'edit'])->name('citie.edit');
Route::patch('/citie/{citie}', [App\Http\Controllers\CitieController::class, 'update'])->name('citie.update');
Route::delete('/citie/{citie}', [App\Http\Controllers\CitieController::class, 'destroy'])->name('citie.delete');
//end citie

//srart department
Route::get('/department', [App\Http\Controllers\DepartmentController::class, 'index'])->name('department.department');
Route::get('/department/create', [App\Http\Controllers\DepartmentController::class, 'create'])->name('department.create');
Route::post('/department', [App\Http\Controllers\DepartmentController::class, 'store'])->name('department.store');
Route::get('/department/{department}/edit', [App\Http\Controllers\DepartmentController::class, 'edit'])->name('department.edit');
Route::patch('/department/{department}', [App\Http\Controllers\DepartmentController::class, 'update'])->name('department.update');
Route::delete('/department/{department}', [App\Http\Controllers\DepartmentController::class, 'destroy'])->name('department.delete');
//end department

//srart order
Route::get('/get-client-data/{telephone}', 'OrderController@getClientData');
Route::get('/order', [App\Http\Controllers\OrderController::class, 'index'])->name('order.order');
Route::get('/order/create', [App\Http\Controllers\OrderController::class, 'create'])->name('order.create');
Route::post('/order', [App\Http\Controllers\OrderController::class, 'store'])->name('order.store');
Route::get('/order/{order}/edit', [App\Http\Controllers\OrderController::class, 'edit'])->name('order.edit');
Route::patch('/order/{order}', [App\Http\Controllers\OrderController::class, 'update'])->name('order.update');
Route::delete('/order/{order}', [App\Http\Controllers\OrderController::class, 'destroy'])->name('order.delete');
//end order