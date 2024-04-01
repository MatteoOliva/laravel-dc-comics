<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\DcController;



use Illuminate\Support\Facades\Route;

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

route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/dcs', [DcController::class, 'index'])->name('dcs.index');
Route::get('/dcs/create', [DcController::class, 'create'])->name('dcs.create');
Route::get('/dcs/{dc}', [DcController::class, 'show'])->name('dcs.show');
Route::post('/dcs', [DcController::class, 'store'])->name('dcs.store');


