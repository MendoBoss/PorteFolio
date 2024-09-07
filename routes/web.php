<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PortfolioController;

// Route::get('/', function () {
//     return view('portfolio.accueil');
// });

// Portfolio
Route::get('/',[PortfolioController::class, 'accueil'])->name('portfolioAccueil');
Route::get('/cv',[PortfolioController::class, 'cv'])->name('portfolioCv');
Route::get('/contact',[PortfolioController::class, 'contact'])->name('portfolioContact');
Route::get('/portfolio',[PortfolioController::class, 'portfolio'])->name('portfolioPortfolio');
Route::get('/aPropos',[PortfolioController::class, 'aPropos'])->name('portfolioAPropos');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
