<?php

use App\Http\Controllers\VulnerabilityController;
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

Route::get('/', [VulnerabilityController::class, 'index'])->name('dashboard');


//Route::get('/dashboard', function () {
//    return Inertia::render('Dashboard');
//})->name('dashboard');

Route::get('/create', function () {
    return Inertia::render('Create');
})->name('create');

Route::get('/show', function () {
    return Inertia::render('Show');
})->name('show');

Route::get('/edit', function () {
    return Inertia::render('Edit');
})->name('edit');

require __DIR__.'/auth.php';
