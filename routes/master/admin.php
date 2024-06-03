<?php

use App\Http\Controllers\AdminArticlesController;
use App\Models\Article;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::prefix('administrator')
->middleware(['auth'])
->group(fn() => [
    Route::view('dashboard','admins.index',[
        'users' => User::all(),
        'articles' => Article::all(),
    ])->name('admins.index'),
    Route::view('users','admins.users',[
        'users' => User::orderBy('id','desc')->paginate(10),
    ])->name('admins.userall'),

    Route::view('profile','admins.profile')->name('admins.profile'),

    Route::view('settings','admins.setting')->name('admins.setting'),

    Route::resources([
        'articles' => AdminArticlesController::class,
    ]),
]);
