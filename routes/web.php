<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/appointment', [AppointmentController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);
Route::get('/services', [ServiceController::class, 'index']);
Route::get('/services-details', [ServiceController::class, 'ServiceDetails']);
Route::get('/faq', [FaqController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);
