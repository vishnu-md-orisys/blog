<?php

use App\Http\Controllers\OriBlogController;
 
Route::resource('oriblogs',OriBlogController::class);
Route::post('/create', 'OriBlogController@store');
Route::post('/{id}/edit', 'OriBlogController@update');
