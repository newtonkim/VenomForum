<?php

use App\Models\Thread;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ThreadController;

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

    $threads=Thread::paginate(15);
    return view('welcome', compact('threads'));
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// Route::get('/home', [HomeController::class], 'index');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::resource('/thread', ThreadController::class);
