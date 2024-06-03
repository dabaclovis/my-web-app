<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsersArticlesController;

Route::prefix('users')
->middleware(['auth'])
->group(fn() => [
    Route::controller(HomeController::class)
    ->group(fn() => [
      Route::get('dashboard','index')->name('home'),
      Route::get('profile','profile')->name('home.profile'),
      Route::get('settings','setting')->name('home.settings'),
      Route::post('upload','uploadAvatar')->name('home.upload'),
    ]),
    Route::resources([
        'blogs' => UsersArticlesController::class,
    ]),
]);
