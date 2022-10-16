<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Facades\App\MarkdownConverter;
use Illuminate\Mail\Markdown;
use Illuminate\Support\Facades\Artisan;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::get('test', function (Request $request) {
    return view('vue-3');
})->name('test');


require __DIR__.'/auth.php';
