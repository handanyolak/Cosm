<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PlaygroundController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
| AppServiceProviders**
*/


Route::get('/', [HomeController::class, 'anasayfa'])->name('anasayfa');
Route::get('/products', [ProductController::class, 'index'])->name('product.index');
Route::get('/product/{product:id}', [ProductController::class, 'show'])->name('product.show');
Route::get('/brand/{brand}', [HomeController::class, 'brand'])->name('brand');
Route::get('/about-us', [HomeController::class, 'about'])->name('about-us');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/discount', [HomeController::class, 'discount'])->name('discount');
Route::get('/blogs', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{blog}', [BlogController::class, 'show'])->name('blog.show');
Route::get('/cart', [HomeController::class, 'cart'])->name('cart');
Route::get('/checkout', [HomeController::class, 'checkout'])->name('checkout');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

/*Route::middleware('admin')->get('/admin');*/

/*Route::get('/playground', [PlaygroundController::class, 'playground'])->name('playground');*/
