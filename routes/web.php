<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use Illuminate\Routing\Route as RoutingRoute;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate'])->name('authenticate');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'store'])->name('store');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/construction', function () { return view('construction');})->name('construction');


Route::middleware([
    'auth'
])->group(function () {
    Route::get('/tables', function () { return view('tables');})->name('tables');
    Route::get('/home', function () { return view('dashboard'); })->name('dashboard');
});
