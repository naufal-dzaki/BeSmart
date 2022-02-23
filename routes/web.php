<?php

// use Illuminate\Http\Request;
use App\Http\Controllers\BiodataController;
use App\Http\Controllers\DashboardMaterialController;
use App\Http\Controllers\DashboardSubjectController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\MotivationController;
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
    Route::post('/logout', [LogoutController::class, 'logout']);

    Route::get('/home', [HomeController::class, 'index'])->name('home');

    Route::get('/subject/{subject:slug}', [SubjectController::class, 'index']);
    Route::get('/subject/{subject:slug}/detail/{post:slug}', [SubjectController::class, 'show']);

    Route::get('/tugas', [SubjectController::class, 'tugas']);
    Route::get('/tugas/{post:slug}', [SubjectController::class, 'tugas_detail']);

    Route::get('/biodata', [BiodataController::class, 'index'])->name('biodata.show');
    Route::get('/biodata/{biodata:slug}/edit', [BiodataController::class, 'edit'])->name('biodata.edit');
    Route::put('/biodata/{biodata:slug}', [BiodataController::class, 'update'])->name('biodata.update');

    Route::get('/absen', function(){return view('contents.absen', ['title' => '| Absen']);});

    Route::get('/home/{motivation:slug}', [MotivationController::class, 'index'])->name('motivation');

    Route::get('/dashboard', function () {return view('dashboard.index');})->name('dashboard');

    Route::get('/dashboard/materials/checkSlug', [DashboardMaterialController::class, 'checkSlug']);
    Route::resource('/dashboard/materials', DashboardMaterialController::class);
});

Route::get('/coba', function(){return view('dashboard.index');});