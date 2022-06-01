<?php
/* Created by Renaud */
/* Editer les routes du CRUD User dans l'admin. */

use App\Http\Controllers\AdminBlogController;

use Illuminate\Support\Facades\Route;
Route::middleware('auth')->group(function () {


    Route::get('admin/blog', [AdminBlogController::class, 'list'])
                ->name('blog.list');
  

 
});



?>