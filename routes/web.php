<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Counter;
use App\Livewire\DebiturList;
use App\Livewire\DebiturPayments;

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

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::get('/debiturs', DebiturList::class)
    ->middleware('auth')
    ->name('debiturs');
Route::get('/debitur/{id}', DebiturPayments::class)
    ->middleware('auth')
    ->name('debitur_detail');
require __DIR__.'/auth.php';
