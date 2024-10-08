<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;

Route::get('/', function () {
    return view('welcome');
});



Route::get('locale/{locale}', function ($locale) {
    if (in_array($locale, ['en', 'ar'])) {
        Session::put('locale', $locale);
        App::setLocale($locale);
    }
    return redirect()->back();
})->name('setLocale');






Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Admin Routes
Route::group(['middleware' => ['role:admin']], function () {
    Route::resource('categories', CategoryController::class);
    Route::resource('articles', ArticleController::class);
});

// Writer Routes
Route::group(['middleware' => ['role:writer']], function () {
    Route::resource('articles', ArticleController::class);
});


Route::resource('categories', CategoryController::class);
Route::resource('articles', ArticleController::class);

require __DIR__.'/auth.php';
