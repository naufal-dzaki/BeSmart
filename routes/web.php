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


Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('auth');
// Route::get('/home/{subject:slug}', [HomeController::class, 'show']);

Route::get('/subject/{subject:slug}', [SubjectController::class, 'index'])->middleware('auth');
Route::get('/subject/{subject:slug}/detail/{post:slug}', [SubjectController::class, 'show'])->middleware('auth');

Route::get('/tugas', [SubjectController::class, 'tugas'])->middleware('auth');
Route::get('/tugas/{post:slug}', [SubjectController::class, 'tugas_detail'])->middleware('auth');

// Route::get('/{subject:slug}/{post:slug}', function(){
//     return view('home.subject.detail', [
//         'title' => ' | Subject'
//     ]);
// });

// Route::get('/tugas', function(){
//     return view('contents.tugas', [
//         'title' => '| Tugas'
//     ]);
// })->middleware('auth');

Route::get('/absen', function(){
    return view('contents.absen', [
        'title' => '| Absen'
    ]);
})->middleware('auth');

Route::get('/biodata', function(){
    return view('contents.biodata', [
        'title' => '| Biodata'
    ]);
})->middleware('auth');

Route::get('/materi', function(){
    return view('contents.materi', [
        'title' => ' | Materi'
    ]);
})->middleware('auth');

require __DIR__.'/auth.php';

Route::post('/logout', [LogoutController::class, 'logout']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::get('/coba', function(){
    return view('dashboard.index');
});



