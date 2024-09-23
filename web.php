<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;

// Route::get('/', function () {
//     return view('welcome');
// });



Route::get('/', [CustomerController::class, 'showCustomer'])->name('home');

Route::get('/customer/{id}', [CustomerController::class, 'singleCustomer'])->name('view.customer');

Route::post('/add', [CustomerController::class, 'addCustomer'])->name('addCustomer');

Route::view('newcustomer', '/add-customer');



Route::put('/update/{id}', [CustomerController::class, 'updateCustomer'])->name('update.customer');

Route::get('/updatePage/{id}', [CustomerController::class, 'updatePage'])->name('update.Page');



Route::get('/delete/{id}', [CustomerController::class, 'deleteCustomer'])->name('detele.customer');
