<?php

use Illuminate\Support\Facades\Route;

Route::prefix('administrator')
->middleware(['auth'])
->group(fn() => [
    Route::view('dashboard','admins.index')->name('admins.index'),
    Route::view('profile','admins.profile')->name('admins.profile'),
    Route::view('settings','admins.setting')->name('admins.setting'),
]);
