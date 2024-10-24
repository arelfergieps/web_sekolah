<?php

use App\Http\Controllers\beranda;
use App\Http\Controllers\logout;
use App\Http\Controllers\saran;

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
       return view('beranda.beranda');
    })->name('dashboard');
    Route::post('/create_saran',  [saran::class, 'create'])->name('saran.create');
    Route::get('/saran',  [saran::class, 'index'])->name('saran.view');
});
Route::get('/beranda',  [beranda::class, 'index'])->name('beranda.view');


Route::get('/update_saran/{id}',  [saran::class, 'edit'])->name('update_saran');
Route::post('/edit_saran/{id}',  [saran::class, 'update'])->name('edit_saran');
Route::get('/delete_saran/{id}', [saran::class, 'destroy'])->name('saran_delete');

Route::get('/logout', [logout::class, 'logout'])->name('admin.logout')->middleware('auth');