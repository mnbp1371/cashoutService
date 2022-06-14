<?php

use App\Http\Controllers\TransactionController;
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


Auth::routes(['reset' => false, 'confirm' => false, 'verify' => false]);

Route::middleware(['auth'])->name('user.')->group(function () {
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
    Route::resource('transactions', TransactionController::class)->only('index');
    Route::get('cash-outs', [TransactionController::class, 'cashOutPage'])->name('cashOutPage');
    Route::post('cash-outs', [TransactionController::class, 'cashOutCall'])->name('cashOutCall');
});


