<?php

use App\Livewire\Depo\CreateDepo;
use App\Livewire\Depo\Depo;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/depo/create', CreateDepo::class);
Route::get('/depo', Depo::class);
