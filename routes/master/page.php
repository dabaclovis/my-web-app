<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;


Route::prefix('pages')->group(fn() => [
    Route::view('about', 'pages.about')->name('pages.about'),
]);

Route::post('registration',[RegisterController::class, 'handledRegistration'])->name('regination');
Route::post('logination',[LoginController::class,'director'])->name('logination');
