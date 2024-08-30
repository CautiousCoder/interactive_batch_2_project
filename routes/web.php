<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\WorkExperienceController;


Route::get('/', function () {
    return view('pages.index');
});

Route::get('/', [HomeController::class,'home'])->name('home');
Route::get('/projects', [ProjectController::class,'project'])->name('project');
Route::get('/project/{slug}', [ProjectController::class,'projectView'])->name('project-view');
Route::get('/work-experience', [WorkExperienceController::class,'workExperience'])->name('workExperience');