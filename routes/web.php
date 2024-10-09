<?php

use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\WelcomeController;
use App\Models\Project;
use Illuminate\Support\Facades\Route;

Route::get(uri: '/', action: [ProjectsController::class, 'index'])->name('projects.index');
Route::get('/project/{project}', [ProjectsController::class, 'show'])->name('projects.show');