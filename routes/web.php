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
Route::get('/contact-us', [HomeController::class, 'contactus'])->name('contactus');
Route::get('/legal-disclaimer', [HomeController::class, 'legalDesclaimer'])->name('legalDesclaimer');
Route::get('/health-safety', [HomeController::class, 'healthSafety'])->name('health-safety');
Route::get('/privacy-policy', [HomeController::class, 'privacyPolicy'])->name('privacyPolicy');
Route::get('/social-environment', [HomeController::class, 'socialEnvironment'])->name('socialEnvironment');
Route::get('/corporate-social-responsibility', [HomeController::class, 'csr'])->name('csr');
Route::get('/certificate', [HomeController::class, 'certificate'])->name('certificate');



Route::get('/financial-information', [InvestorPages::class, 'index'])->name('financial-information');
Route::get('/newsroom', [NewsroomPages::class, 'index'])->name('newsroom');
Route::get('/newsroom', [NewsroomPages::class, 'index'])->name('newsroom');





// Press Release Routes
Route::prefix('press-release')->group(function () {
    Route::view('12-10-2021-213041549', 'frontend.press-release.12-10-2021-213041549');
    Route::view('02-08-2018-213105752', 'frontend.press-release.02-08-2018-213105752');
    Route::view('02-10-2021-213105551', 'frontend.press-release.02-10-2021-213105551');
    Route::view('02-11-2020-212952413', 'frontend.press-release.02-11-2020-212952413');
    Route::view('02-12-2019-213025822', 'frontend.press-release.02-12-2019-213025822');
    Route::view('02-25-2022-223020793', 'frontend.press-release.02-25-2022-223020793');
    Route::view('06-10-2019-212950889', 'frontend.press-release.06-10-2019-212950889');
    Route::view('06-12-2020-225457424', 'frontend.press-release.06-12-2020-225457424');
    Route::view('06-15-2018-213018472', 'frontend.press-release.06-15-2018-213018472');
    Route::view('06-15-2021-220119029', 'frontend.press-release.06-15-2021-220119029');
    Route::view('08-08-2018-213008342', 'frontend.press-release.08-08-2018-213008342');
    Route::view('08-12-2019-110051532', 'frontend.press-release.08-12-2019-110051532');
    Route::view('08-13-2020-213005110', 'frontend.press-release.08-13-2020-213005110');
    Route::view('08-29-2022-133554532', 'frontend.press-release.08-29-2022-133554532');
    Route::view('08-30-2021-220030161', 'frontend.press-release.08-30-2021-220030161');
    Route::view('11-10-2020-214133582', 'frontend.press-release.11-10-2020-214133582');
    Route::view('11-13-2018-213036478', 'frontend.press-release.11-13-2018-213036478');
    Route::view('11-15-2019-082828740', 'frontend.press-release.11-15-2019-082828740');
});





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
