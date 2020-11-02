<?php

use App\Http\Livewire\Luhn\LuhnIndex;
use App\Http\Livewire\Tool\ToolIndex;
use App\Http\Livewire\User\UserIndex;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('tools', ToolIndex::class)->name('tool.index');
Route::get('luhn-algorithm', LuhnIndex::class)->name('luhn.index');
Route::get('user', UserIndex::class)->name('user.index');
