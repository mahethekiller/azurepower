<?php
use App\Http\Controllers\Frontend\InvestorPages;
use App\Http\Controllers\Frontend\NewsroomPages;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OtpController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/leadership-team', [HomeController::class, 'leadership_team'])->name('leadership-team');
Route::get('/sustainability', [HomeController::class, 'sustainability'])->name('sustainability');


Route::get('/investor', [InvestorPages::class, 'index'])->name('investor');
Route::get('/newsroom', [NewsroomPages::class, 'index'])->name('newsroom');




Route::get('/storage/{folder}/{filename}', function ($folder, $filename) {
    $path = storage_path("app/public/{$folder}/{$filename}");

    if (!file_exists($path)) {
        abort(404);
    }

    return response()->file($path);
});



// ADMIN AND EDITOR ROLE

require __DIR__ . '/auth.php';
require __DIR__ . '/admin.php';
