<?php

use App\Enums\SupportStatus;
use App\Http\Controllers\Admin\{SupportController, ReplySupportController};
use App\Http\Controllers\Site\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

// Route::get('/teste', function () {});
// dd(array_column(SupportStatus::cases(), 'name'));




Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/supports/{id}/replies', [ReplySupportController::class, 'index'])->name('replies.index');


    Route::delete('/supports/{id}', [SupportController::class, 'destroy'])->name('supports.destroy');

    Route::put('/supports/{id}', [SupportController::class, 'update'])->name('supports.update');

    Route::get('/supports/{id}/edit', [SupportController::class, 'edit'])->name('supports.edit');

    Route::get('/admin.supports/create', [SupportController::class, 'create'])->name('supports.create');



    Route::post('/supports', [SupportController::class, 'store'])->name('supports.store');

    Route::get('/supports', [SupportController::class, 'index'])->name('supports.index');

    Route::get('/contact', [ContactController::class, 'index']);
});

require __DIR__ . '/auth.php';
