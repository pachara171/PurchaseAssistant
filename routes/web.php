<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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

Route::get('/', [AuthController::class, 'loginPage'])->name('signin');
Route::post('/', [AuthController::class, 'checkLogin'])->name('checkLogin');
Route::get('/signup', [AuthController::class, 'registerPage'])->name('signup');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth.login'])->group(function() {
    Route::get('/home', [AuthController::class, 'index']);
    Route::get('/test', function () {
        return view('responder.index');
    });
    
});
