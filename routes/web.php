<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/testt', function () {
    return view('pages.hotel-details');
})->name('testt');

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/packages', [HomeController::class, 'packages'])->name('packages');
Route::get('/packages/{id}', [HomeController::class, 'package_details'])->name('packages.details');
Route::get('/guides', [HomeController::class, 'guides'])->name('guides');
Route::get('/guides/{id}', [HomeController::class, 'guide_details'])->name('guides.details');
Route::get('/islamic-shop', [HomeController::class, 'shop'])->name('products');
Route::get('/islamic-shop/products/{id}', [HomeController::class, 'product_details'])->name('products.details');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/booking/{id}', [HomeController::class, 'booking'])->name('booking');
Route::get('/404-page', [HomeController::class, 'not_found_page'])->name('404');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
