<?php

use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
=======
use App\Http\Controllers\LayoutController;
use App\Http\Controllers\FormateursController;
>>>>>>> origin/team2

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

<<<<<<< HEAD
=======
*/

// route default
Route::get('/',[LayoutController::class, 'index'])->name('index');

Route::get('/formation',[LayoutController::class, 'formation'])->name('formation');

Route::get('/formation/detail',[LayoutController::class, 'formation_detail'])->name('formation-detail');

Route::get('/blog',[LayoutController::class, 'blog'])->name('blog');

/* Route formateur */
Route::get('/formateur', [FormateursController::class, 'index'])->name('formateurs');
Route::get('/formateur/{id}', [FormateursController::class, 'detail'])->name('formateur-detail');


/* Route connexion */
Route::get('/connexion',[LayoutController::class, 'connexion'])->name('connexion');



>>>>>>> origin/team2
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

<<<<<<< HEAD
=======

/* Zone admin */
Route::get('/admin', function () {
    return view('admin');
})->middleware(['auth'])->name('admin');

/* Include of roads Administration */
require __DIR__.'/admin/blog.php';
require __DIR__.'/admin/formateur.php';
require __DIR__.'/admin/user.php';
require __DIR__.'/admin/formation.php';
>>>>>>> origin/team2
require __DIR__.'/auth.php';
