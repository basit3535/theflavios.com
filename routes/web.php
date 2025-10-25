<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\SocialLinkController;
use App\Http\Controllers\WebController;
use App\Http\Controllers\WeeklyMenuController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrivateInformationController;

Route::get('/',[WebController::class, 'index'])->name('home');

Route::get('/menu', [WebController::class, 'menu'])->name('menu');


Route::post('/feedback', [FeedbackController::class, 'store'])->name('feedback.store');


Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::resource('categories', CategoryController::class);
    Route::resource('menus', MenuController::class);
    Route::resource('menus', MenuController::class);
    Route::resource('weekly-menus', WeeklyMenuController::class);
    Route::resource('feedback', FeedbackController::class)->except(['store']);
    Route::resource('social-links', SocialLinkController::class);
    Route::resource('private-information', PrivateInformationController::class);

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});

require __DIR__.'/auth.php';
