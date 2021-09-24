<?php

use App\Http\Livewire\Page;
use App\Http\Livewire\Pages;
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

Route::prefix('pages')->name('pages.')->group(function () {
    Route::get('/', Pages::class)->name('show');
    Route::get('/{page}', Page::class)->name('page.show');
});
