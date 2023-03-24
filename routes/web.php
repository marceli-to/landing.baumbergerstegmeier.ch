<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Public Web Routes
|--------------------------------------------------------------------------
|
*/

Route::get('/', [HomeController::class, 'index'])->name('page.home');

/*
|--------------------------------------------------------------------------
| Protected Web Routes
|--------------------------------------------------------------------------
|
*/

// Route::middleware('auth:sanctum', 'verified')->group(function() {
//   Route::get('/administration/{any?}', function () {
//     return view('spa.app');
//   })->where('any', '.*');
// });
