<?php
use App\Http\Controllers\Frontend\InvestorPages;
use App\Http\Controllers\Frontend\NewsroomPages;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OtpController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');


Route::get('/investor', [InvestorPages::class, 'index'])->name('investor');
Route::get('/newsroom', [NewsroomPages::class, 'index'])->name('newsroom');






// ADMIN AND EDITOR ROLE

require __DIR__ . '/auth.php';
require __DIR__ . '/admin.php';
