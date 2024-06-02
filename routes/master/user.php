<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::prefix('users')
->middleware(['auth'])
->group(fn() => [
    Route::controller(HomeController::class)
    ->group(fn() => [
      Route::get('dashboard','index')->name('home'),
      Route::get('profile','profile')->name('home.profile'),
      Route::get('settings','setting')->name('home.settings'),
    ]),
]);
