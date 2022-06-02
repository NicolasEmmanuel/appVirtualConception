<?php
/* Created by Renaud */
/* Editer les routes du CRUD User dans l'admin. */

use App\Http\Controllers\AdminFormateurController;

use Illuminate\Support\Facades\Route;
Route::middleware('auth')->group(function () {


    Route::get('admin/formateur', [AdminFormateurController::class, 'list'])
                ->name('formateur.list');
  

 
});



?>