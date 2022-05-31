<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LayoutController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|


Route::get('/', function () {
    return view('welcome');
});

*/

// route default
Route::get('/',[LayoutController::class, 'index'])->name('index');

Route::get('/formation',[LayoutController::class, 'formation'])->name('formation');

Route::get('/formation/detail',[LayoutController::class, 'formation_detail'])->name('formation_detail');

Route::get('/blog',[LayoutController::class, 'blog'])->name('blog');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');



require __DIR__.'/auth.php';
