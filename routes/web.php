<?php

use App\Http\Controllers\Frontend\IndexController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [IndexController::class, 'index'])->name('frontend.index');
Route::get('/about-us', [IndexController::class, 'aboutUs'])->name('frontend.aboutUs');
Route::get('/career', [IndexController::class, 'career'])->name('frontend.career');
Route::get('/contact', [IndexController::class, 'contact'])->name('frontend.contact');
Route::get('/environmental-&-social-impact-assessment', [IndexController::class, 'envImpactService'])->name('frontend.envImpactService');
Route::get('/environmental-social-due-diligence', [IndexController::class, 'envDueService'])->name('frontend.envDueService');
Route::get('/esms-preparation-monitoring', [IndexController::class, 'esmMonitService'])->name('frontend.esmMonitService');
Route::get('/sustainability-reporting', [IndexController::class, 'susRepotService'])->name('frontend.susRepotService');
Route::get('/supply-chain-management', [IndexController::class, 'supChainService'])->name('frontend.supChainService');

require __DIR__ . '/admin.php';
