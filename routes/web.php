<?php

use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/projects', [ProjectController::class, 'index']);

Route::get('/projects/{id}', [ProjectController::class, 'show'])->name('projects.show');

Route::get('/experiences', function () {
    return view('experience');
});
