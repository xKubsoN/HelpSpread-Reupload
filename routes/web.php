<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HSAuthController;
use App\Http\Controllers\HSSelectController;
use App\Http\Controllers\HSPostController;
use App\Http\Controllers\HSUserSelectController;
use App\Http\Controllers\HSApplicationsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('dashboard', [HSAuthController::class, 'dashboard']); 
Route::get('login', [HSAuthController::class, 'index'])->name('login');
Route::post('custom-login', [HSAuthController::class, 'customLogin'])->name('login.custom'); 
Route::get('registration', [HSAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [HSAuthController::class, 'customRegistration'])->name('register.custom'); 
Route::get('signout', [HSAuthController::class, 'signOut'])->name('signout');
Route::post('creating', [HSPostController::class, 'store']);
Route::post('apply', [HSApplicationsController::class, 'store']);

Route::get('/', [HSSelectController::class, 'selecthome'], function () {
    return View::make('pages.home')->name('home');
});

Route::get('/admin', [HSSelectController::class, 'selectadmin'], function () {
    return view('pages.admin');
})->middleware(['auth', 'admin'])->name('admin');

Route::get('/profile', [HSSelectController::class, 'selectprofile'], function () {
    return view('pages.profile');
})->middleware(['auth'])->name('profile');

Route::get('/creating', [HSPostController::class, 'index'],  function() {
    return View::make("pages.creating");
})->middleware(['auth', 'creator'])->name('creating');;

Route::get('/apply', [HSSelectController::class, 'selectapply'], [HSApplicationsController::class, 'index'], function() {
    return View::make("pages.apply");
})->middleware(['auth'])->name('apply');