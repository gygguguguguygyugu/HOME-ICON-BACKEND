<?php

use App\Http\Controllers\CategoryController;

Route::get('/categories', [CategoryController::class, 'getCategories']);
Route::get('/categories/all', [CategoryController::class, 'getAllCategories']);
Route::get('/categories/search', [CategoryController::class, 'getCategorieSearch']);
Route::get('/categories/{id}', [CategoryController::class, 'getCategoryById']);
