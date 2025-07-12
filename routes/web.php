<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\ProjectsController;
use App\Http\Controllers\Frontend\ResumeController;


Route::get('/', [HomeController::class, 'index'])->name("home");
Route::get('/resume', [ResumeController::class, 'index'])->name("resume");
Route::get('/projects', [ProjectsController::class, 'index'])->name("projects");
Route::get('/contact', [ContactController::class, 'index'])->name("contact");
Route::post('/contact-save', [ContactController::class, 'contact_save'])->name("contactSave");

Route::get('/contact-confirm', [ContactController::class, 'confirmation'])->name('confirmation');
