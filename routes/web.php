<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\ProjectsController;

// Route::get('/', function () {
//     return view('welcome');
// });
//Route::get('/', WelcomeController::class);

// Route::view('/', 'projects.index')->name('projects.index');
// Route::view('/project/{project}', 'projects.show')->name('projects.show');

Route::get('/', [ProjectsController::class, 'index'])->name('projects.index');
Route::get('/project/{project}', [ProjectsController::class, 'show'])->name('projects.show');