<?php

use Illuminate\Http\Request;
use App\Http\Controllers\BiodataController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\DashboardBiodataController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PresensiController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\MotivationController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\DashboardMateriController;
use App\Http\Controllers\DashboardPresensiController;
use App\Http\Controllers\DashboardTaskController;
use App\Http\Controllers\DashboardMotivasiController;
use Illuminate\Support\Facades\Auth;
use App\Models\Biodata;

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
    if(Auth::user()){
        if (auth()->user()->level == 'guru') { // Role Guru
            return redirect()->intended('dashboard');
        } elseif (auth()->user()->level == 'siswa') { // Role siswa
            return redirect()->intended('home');
        }
    }
    return view('layouts.index', [
        'title' => ' '
    ]);
});

require __DIR__ . '/auth.php';
Route::post('/logout', [LogoutController::class, 'logout']);
Route::group(['middleware' =>  ['auth','ceklevel:siswa']], function () {

    Route::get('/home', [HomeController::class, 'index'])
        ->name('home');

    Route::get('/subject/{subject:slug}', [SubjectController::class, 'index']);
    Route::get('/subject/{subject:slug}/detail/{post:slug}', [SubjectController::class, 'show']);

    Route::get('/tugas', [SubjectController::class, 'tugas']);
    Route::get('/tugas/{post:slug}', [SubjectController::class, 'tugas_detail']);

    Route::get('/biodata', [BiodataController::class, 'index'])
        ->name('biodata.show');
    Route::get('/biodata/{biodata:slug}/edit', [BiodataController::class, 'edit'])
        ->name('biodata.edit');
    Route::put('/biodata/{biodata:slug}', [BiodataController::class, 'update'])
        ->name('biodata.update');

    Route::get('/home/{motivation:slug}', [MotivationController::class, 'index'])
        ->name('motivation');

    Route::post('chat/store', [ChatController::class, 'store'])
        ->name('chat.store');

        Route::get('/presensi', [PresensiController::class, 'index'])
        ->name('presensi');
    Route::get('/presensi-masuk', [PresensiController::class, 'presensiMasuk'])
        ->name('presensi-masuk');
    Route::post('/post-presensi-masuk', [PresensiController::class, 'postPresensiMasuk'])
        ->name('post-presensi-masuk');
    Route::get('/presensi-keluar', [PresensiController::class, 'presensiKeluar'])
        ->name('presensi-keluar');
    Route::post('/post-presensi-keluar', [PresensiController::class, 'postPresensiKeluar'])
        ->name('post-presensi-keluar');
    Route::get('/rekap-presensi', [PresensiController::class, 'rekapPresensiKaryawan'])
        ->name('rekap-presensi');
});

Route::group(['middleware' => ['auth','ceklevel:guru']], function() {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/dashboard/materi/checkSlug', [DashboardMateriController::class, 'checkSlug']);
    Route::get('/dashboard/materi', [DashboardMateriController::class, 'index'])
        ->name('materi.index');
    Route::get('/dashboard/materi/create', [DashboardMateriController::class, 'create'])
        ->name('materi.create');
    Route::post('/dashboard/materi', [DashboardMateriController::class, 'store'])
        ->name('materi.store');
    Route::get('/dashboard/materi/{post:slug}', [DashboardMateriController::class, 'show'])
        ->name('materi.show');
    Route::get('/dashboard/materi/{post:slug}/edit', [DashboardMateriController::class, 'edit'])
        ->name('materi.edit');
    Route::put('/dashboard/materi/{post:slug}', [DashboardMateriController::class, 'update'])
        ->name('materi.update');
    Route::delete('/dashboard/materi/{post:slug}', [DashboardMateriController::class, 'destroy'])
        ->name('materi.destroy');

    Route::get('/dashboard/task/checkSlug', [DashboardTaskController::class, 'checkSlug']);
    Route::get('/dashboard/task', [DashboardTaskController::class, 'index'])
        ->name('task.index');
    Route::get('/dashboard/task/create', [DashboardTaskController::class, 'create'])
        ->name('task.create');
    Route::post('/dashboard/task', [DashboardTaskController::class, 'store'])
        ->name('task.store');
    Route::get('/dashboard/task/{post:slug}', [DashboardTaskController::class, 'show'])
        ->name('task.show');
    Route::get('/dashboard/task/{post:slug}/edit', [DashboardTaskController::class, 'edit'])
        ->name('task.edit');
    Route::put('/dashboard/task/{post:slug}', [DashboardTaskController::class, 'update'])
        ->name('task.update');
    Route::delete('/dashboard/task/{post:slug}', [DashboardTaskController::class, 'destroy'])
        ->name('task.destroy');

    Route::get('/dashboard/biodata', [DashboardBiodataController::class, 'index'])
        ->name('biodata.index');

    Route::get('/dashboard/presensi', [DashboardPresensiController::class, 'rekapPresensiKaryawan'])
        ->name('rekap-presensi-admin');
    Route::get('/cetak-laporan', [DashboardPresensiController::class, 'cetakLaporan'])
        ->name('cetak-laporan');

    // motivasi
    Route::get('/dashboard/motivasi/checkSlug', [DashboardMotivasiController::class, 'checkSlug']);
    Route::delete('/dashboard/motivasi/{motivation}', [DashboardMotivasiController::class, 'destroy'])->name('motivation.destroy');
    Route::resource('dashboard/motivasi', DashboardMotivasiController::class);
    Route::get('/dashboard/{motivation:slug}', [DashboardMotivasiController::class, 'show'])->name('motivation');

});
