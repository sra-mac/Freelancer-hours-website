<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;

// Route::get('/', function () {
//     return view('welcome');
// });
//Route::get('/', WelcomeController::class);
Route::view('/', 'projects.index')->name('projects.index');
Route::view('/project/{project}', 'projects.show')->name('projects.show');