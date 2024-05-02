<?php

use App\Livewire\CreateCustomer;
use App\Livewire\Customers;
use App\Livewire\EditCustomer;
use App\Livewire\Login;
use App\Livewire\Register;
use App\Livewire\ViewCustomer;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function () {
    Route::get('/customers/create', CreateCustomer::class);
    Route::get('/customers', Customers::class);
    Route::get('/customers/{customer}', ViewCustomer::class);
    Route::get('/customers/{customer}/edit', EditCustomer::class);
});

Route::get('/register', Register::class);
Route::get('/login', Login::class)->name('login');

Route::get('/auth/microsoft', [App\Http\Controllers\MicrosoftAuthController::class, 'redirect']);
Route::get('/auth/microsoft/call-back', [App\Http\Controllers\MicrosoftAuthController::class, 'callbackMicrosoft']);