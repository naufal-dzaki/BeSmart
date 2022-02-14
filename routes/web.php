<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\SubjectController;

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

Route::get('/', function () {
    return view('layouts.index', [
        'title' => ' '
    ]);
});

require __DIR__.'/auth.php';
Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/subject/{subject:slug}', [SubjectController::class, 'index']);
    Route::get('/subject/{subject:slug}/detail/{post:slug}', [SubjectController::class, 'show']);
    Route::get('/tugas', [SubjectController::class, 'tugas']);
    Route::get('/tugas/{post:slug}', [SubjectController::class, 'tugas_detail']);
    Route::resource('/biodata', UserDetailController::class)->except(['create', 'store','destroy']);
    Route::get('/absen', function(){return view('contents.absen', ['title' => '| Absen']);});
    Route::get('/materi', function(){return view('contents.materi', ['title' => ' | Materi']);});
    Route::post('/logout', [LogoutController::class, 'logout']);
    Route::get('/dashboard', function () {return view('dashboard');})->name('dashboard');
    Route::get('/coba', function(){return view('dashboard.index');});
});
