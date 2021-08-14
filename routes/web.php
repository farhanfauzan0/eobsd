<?php

use App\Http\Controllers\Authcontroller;
use App\Http\Controllers\Indexcontroller;
use App\Http\Controllers\PendaftaranController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/admin/login', [Authcontroller::class, 'index_admin'])->name('login');
Route::post('/admin/login/post', [Authcontroller::class, 'post_admin'])->name('login.admin.post');

Route::middleware(['auth:web'])->prefix('/admin')->group(function () {
    Route::resource('pendaftaran', PendaftaranController::class);
    Route::get('/info', [PendaftaranController::class, 'info_index'])->name('info.index');
    Route::post('/info/post', [PendaftaranController::class, 'info_post'])->name('info.post');
    Route::get('/logout/admin', function () {
        Auth::guard('web')->logout();
        return redirect()->route('login');
    })->name('logout.admin');
});

Route::middleware(['auth:klien'])->prefix('/klien')->group(function () {
    Route::get('/logout/klien', function () {
        Auth::guard('klien')->logout();
        return redirect()->route('index');
    })->name('logout');
    Route::get('/pendaftaran', [Indexcontroller::class, 'pendaftaran'])->name('pendaftaran.klien.index');
    Route::get('/pendaftaran/status', [Indexcontroller::class, 'pendaftaran_status'])->name('pendaftaran.klien.status');
    Route::post('/pendaftaran/post', [Indexcontroller::class, 'pendaftaran_post'])->name('pendaftaran.klien.post');
});
Route::get('/login', [Authcontroller::class, 'index_klien'])->name('login.index');
Route::post('/login/post', [Authcontroller::class, 'login_klien_post'])->name('login.klien.post');
Route::get('/register', [Authcontroller::class, 'register_klien'])->name('register.index');
Route::post('/register/post', [Authcontroller::class, 'register_klien_post'])->name('register.klien.post');

Route::get('/info_pendaftaran', [Indexcontroller::class, 'info_pendaftaran'])->name('info.pendaftaran');
Route::get('/', [Indexcontroller::class, 'index'])->name('index');
