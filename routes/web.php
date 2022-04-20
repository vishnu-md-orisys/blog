<?php

use App\Http\Controllers\OriBlogController;
 
Route::resource('oriblogs',OriBlogController::class);
Route::get('/{id}/edit', 'OriBlogController@edit');
Route::post('/{id}/edit', 'OriBlogController@update');

