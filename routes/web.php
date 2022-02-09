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


Route::get('/home', [HomeController::class, 'index'])->name('home');
// Route::get('/home/{subject:slug}', [HomeController::class, 'show']);

Route::get('/subject/{subject:slug}', [SubjectController::class, 'index']);
Route::get('/subject/{subject:slug}/detail/{post:slug}', [SubjectController::class, 'show']);

// Route::get('/{subject:slug}/{post:slug}', function(){
//     return view('home.subject.detail', [
//         'title' => ' | Subject'
//     ]);
// });

Route::get('/tugas', function(){
    return view('contents.tugas', [
        'title' => '| Tugas'
    ]);
});

Route::get('/absen', function(){
    return view('contents.absen', [
        'title' => '| Absen'
    ]);
});

Route::get('/biodata', function(){
    return view('contents.biodata', [
        'title' => '| Biodata'
    ]);
});

Route::get('/materi', function(){
    return view('contents.materi', [
        'title' => ' | Materi'
    ]);
});

require __DIR__.'/auth.php';

Route::post('/logout', [LogoutController::class, 'logout']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::get('/coba', function(){
    return view('dashboard.index');
});



