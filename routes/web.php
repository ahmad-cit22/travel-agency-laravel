<?php

use App\Http\Controllers\AdminController;
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
    return view('pages.hotels.hotel-details');
})->name('testt');

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/booking/{id}', [HomeController::class, 'booking'])->name('booking');
Route::get('/404-page', [HomeController::class, 'not_found_page'])->name('404');

Route::get('/packages', [HomeController::class, 'packages'])->name('packages');
Route::get('/packages/{id}', [HomeController::class, 'package_details'])->name('packages.details');

Route::get('/guides', [HomeController::class, 'guides'])->name('guides');
Route::get('/guides/{id}', [HomeController::class, 'guide_details'])->name('guides.details');

Route::get('/hotels', [HomeController::class, 'hotels'])->name('hotels');
Route::get('/hotels/{id}', [HomeController::class, 'hotel_details'])->name('hotels.details');

Route::get('/visa-processes', [HomeController::class, 'visa_processes'])->name('visa_processes');
Route::get('/visa-processes/{id}', [HomeController::class, 'visa_process_details'])->name('visa_processes.details');

Route::get('/islamic-shop/products', [HomeController::class, 'products'])->name('products');
Route::get('/islamic-shop/products/{id}', [HomeController::class, 'product_details'])->name('products.details');

Route::get('/blog', [HomeController::class, 'blog'])->name('blogs');
Route::get('/blog/{id}', [HomeController::class, 'blog_details'])->name('blogs.details');

Route::get('/dashboard', [AdminController::class, 'index'])->middleware(['auth'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
