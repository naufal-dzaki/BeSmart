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
    Route::get('/dashboard', function () {return view('dashboard');})->name('dashboard');
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/home/{subject:slug}', [HomeController::class, 'show']);
    Route::get('/subject/detail', function(){return view('home.subject.detail', ['title' => ' | Subject']);});
    Route::get('/tugas', function(){return view('contents.tugas', ['title' => '| Tugas']);});
    Route::get('/absen', function(){return view('contents.absen', ['title' => '| Absen']);});
    Route::get('/biodata', function(){return view('home.biodata.index', ['title' => '| Biodata']);});
    Route::get('/materi', function(){return view('contents.materi', ['title' => ' | Materi']);});
    Route::get('/coba', function(){return view('dashboard.index');});
    Route::post('/logout', [LogoutController::class, 'logout']);
    // absen
    Route::get('/absen', function(){return view('presensi.absen', ['title' => ' | Absen']);});
});
