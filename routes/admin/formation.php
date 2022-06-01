<?php
/* Created by Renaud */
/* Editer les routes du CRUD User dans l'admin. */

use App\Http\Controllers\AdminFormationController;

use Illuminate\Support\Facades\Route;
Route::middleware('auth')->group(function () {


    Route::get('admin/formation', [AdminFormationController::class, 'list'])
                ->name('formation.list');
  

 
});



?>