<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UsersController;

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

// bagian dari login dan register
Route::get('/', [HomeController::class, 'login']);
Route::get('/login', [HomeController::class, 'login'])->name('login');
Route::get('/register', [HomeController::class, 'register'])->name('register');
Route::post('/proses_login', [HomeController::class, 'proses_login'])->name('proses_login')->middleware('throttle:login');
Route::post('/proses_register', [HomeController::class, 'proses_register'])->name('proses_register');
Route::get('/logout', [HomeController::class, 'logout'])->name('logout');

//midleware
Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['cek_login:admin']], function () {
        Route::resource('admin', AdminController::class);
    });
    Route::group(['middleware' => ['cek_login:user']], function () {
        Route::resource('user', UsersController::class);
    });
});

// untuk user
Route::middleware(['auth'])->group(function () {

    //tampilann halaman user
    Route::get('/halaman_user', [UsersController::class, 'index'])->name('halaman_user');
    Route::get('/change_password_user', [UsersController::class, 'change_password_user'])->name('change_password_user');
    Route::get('/change_profile_user', [UsersController::class, 'change_profile_user'])->name('change_profile_user');
    Route::get('/history_value_users', [UsersController::class, 'history_value_users'])->name('history_value_users');

    //tampilan halaman user saat mendapatkan hasil nilai dari mapel Ipa dan Ips 
    Route::get('/result_value_ips/{id}', [UsersController::class, 'result_value_ips'])->name('result_value_ips');
    Route::get('/result_value_ipa/{id}', [UsersController::class, 'result_value_ipa'])->name('result_value_ipa');


    //bagian saat klik mulai quiz    
    Route::get('/soal_ipa', [UsersController::class, 'soal_ipa'])->name('soal_ipa');
    Route::get('/soal_ips', [UsersController::class, 'soal_ips'])->name('soal_ips');

    //proses for user untuk change profile dan password
    Route::post('/proses_change_profile_user/{id}', [UsersController::class, 'proses_change_profile_user'])->name('proses_change_profile_user');
    Route::post('/proses_change_password_user/{id}', [UsersController::class, 'proses_change_password_user'])->name('proses_change_password_user');
    Route::post('/proses_selesai_ujian_soal_ipa', [UsersController::class, 'proses_selesai_ujian_soal_ipa'])->name('proses_selesai_ujian_soal_ipa');
    Route::post('/proses_selesai_ujian_soal_ips', [UsersController::class, 'proses_selesai_ujian_soal_ips'])->name('proses_selesai_ujian_soal_ips');
});

//untuk admin
Route::middleware(['auth'])->group(function () {

    //tampilan pada admin
    Route::get('/halaman_admin', [AdminController::class, 'index'])->name('halaman_admin');

    //tampilan pada change password admin
    Route::get('/change_password_admin', [AdminController::class, 'change_password_admin'])->name('change_password_admin');
    //proses change password admn
    Route::post('/proses_change_passowrd_admin/{id}', [AdminController::class, 'proses_change_passowrd_admin'])->name('proses_change_passowrd_admin');

    //tampilan pada change profile admin 
    Route::get('/change_profile_admin', [AdminController::class, 'change_profile_admin'])->name('change_profile_admin');
    //proses change profil admin
    Route::post('/proses_change_profile_admin/{id}', [AdminController::class, 'proses_change_profile_admin'])->name('proses_change_profile_admin');


    //tampilan nilai ujian ipa
    Route::get('/nilai_ujian_ipa', [AdminController::class, 'nilai_ujian_ipa'])->name('nilai_ujian_ipa');

    //tampilan nilai ujian ips
    Route::get('/nilai_ujian_ips', [AdminController::class, 'nilai_ujian_ips'])->name('nilai_ujian_ips');

    //tampilan melihat user
    Route::get('/melihat_user', [AdminController::class, 'melihat_user'])->name('melihat_user');
});
