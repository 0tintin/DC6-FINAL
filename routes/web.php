<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutMeController;
use App\Http\Controllers\EmployeeController;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route::get('/portfolio', function () {
//     return Inertia::render('Portfolio');
// })->name('portfolio');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::middleware('auth')->group(function () {
    Route::resource('/employee', EmployeeController::class);
    Route::get('/employee', [EmployeeController::class, 'index'])->name('employee');
    Route::patch('/employee/{employee}', [EmployeeController::class, 'edit']) ->name('employee.edit');
    Route::get('/employee/{employee}/show', [EmployeeController::class, 'show']) ->name('employee.show');
    




    
    // Route::put('/portfolio/update', [AboutMeController::class, 'update'])->name('about-me.update');
});
// Route::get('/portfolio', [AboutMeController::class, 'show'])->name('portfolio');
// Route::put('/portfolio/update', [AboutMeController::class, 'update'])->name('about-me.update');

// Route::put('/portfolio', [AboutMeController::class, 'update'])->name('about-me.update');

// Route::resource('/employee', EmployeeController::class);
// Route::delete('/employee/{employee}', [EmployeeController::class, 'destroy']);


require __DIR__.'/auth.php';
