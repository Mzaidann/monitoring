<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RfidController;
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

Route::get('/', function () {
    return view('login');
});

Route::get('/rfid-dashboard', [RfidController::class, 'dashboard']) //ketika berhasil login di arahkan ke halaman dashboard
    ->name('rfid.dashboard')
    ->middleware('auth');

Route::get('/dashboard', [RfidController::class, 'dashboard']); //fungsi untuk menampilkan dashboard

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login.form'); // fungsi menampilkan login form
Route::post('/login', [AuthController::class, 'login'])->name('login'); //fungsi login

Route::post('/logout', [AuthController::class, 'logout'])->name('logout'); //fungsi logout di navbar

Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register.form'); //fungsi menampilkan register form
Route::post('/register', [AuthController::class, 'register'])->name('register'); //fungsi register
