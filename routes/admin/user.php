<?php
/* Created by Renaud */
/* Editer les routes du CRUD User dans l'admin. */

use App\Http\Controllers\AdminUserController;
use Illuminate\Support\Facades\Route;
Route::middleware('auth')->group(function () {


    Route::get('admin/user', [AdminUserController::class, 'list'])
                ->name('user.list');

    Route::get('admin/user/edit', [AdminUserController::class, 'edit'])
                ->name('user.edit');
   
});



?>