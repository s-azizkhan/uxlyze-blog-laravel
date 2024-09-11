<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;


Route::get('/cc', function () {
    // clear cache
    Artisan::call('config:clear');
    Artisan::call('cache:clear');
    Artisan::call('route:clear');
    Artisan::call('view:clear');
    return "Cache cleared";
});
Route::get('/setup', function () {
    // setup application
    Artisan::call('storage:link');
    Artisan::call('migrate:fresh');
    return "Database migrated";
});



Route::get('/', [BlogController::class, 'index'])->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');



// Route::middleware(['auth'])->group(function () {
Route::get('/blogs/create', [BlogController::class, 'create'])->name('blogs.create');
Route::post('/blogs', [BlogController::class, 'store'])->name('blogs.store');
// });

Route::get('/blogs', [BlogController::class, 'index'])->name('blogs.index');
Route::get('/{slug}', [BlogController::class, 'show'])->name('blogs.show');

require __DIR__ . '/auth.php';
