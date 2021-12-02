<?php

use App\Http\Controllers\VulnerabilityController;
use App\Models\Vulnerability;
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

Route::get('/edit/{vulnerability}', [VulnerabilityController::class, 'edit'])->name('edit');
Route::post('/update', [VulnerabilityController::class, 'update'])->name('update');

Route::get('/create', [VulnerabilityController::class, 'create'])->name('create');
Route::post('/store', [VulnerabilityController::class, 'store'])->name('store');

Route::get('/show/{vulnerability}', [VulnerabilityController::class, 'show'])->name('show');


//require __DIR__.'/auth.php';
