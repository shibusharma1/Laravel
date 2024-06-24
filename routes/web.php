<?php

use App\Http\Controllers\abc;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\RegisterController;
use Illuminate\Database\Eloquent\Concerns\HasRelationships;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('customer_view');
// });

// Route to navigate to the form
// Route::get('/register',[RegisterController::class,'index']);
// // Route::post('/register',[RegisterController::class,'register']);
Route::get('/customer',[abc::class,'index']);
Route::get('/customer/create',[abc::class,'create'])->name('customer.create');
Route::post('/customer',[abc::class,'store']);

// Route::get('/customer/view',[abc::class,'view']);
Route::get('/customer/delete/{id}',[abc::class,'delete'])->name('customer.delete');
Route::get('/customer/edit/{id}',[abc::class,'edit'])->name('customer.edit');
Route::post('/customer/update/{id}',[abc::class,'update'])->name('customer.update');


// For HasRelationships
Route::get('/',[IndexController::class,'index']);