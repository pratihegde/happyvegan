<?php

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

Route::get('/', function () {
    return redirect('/register');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('food/food-details/{id}', [App\Http\Controllers\Food\FoodController::class, 'foodDetails'])->name('food.details');


Route::post('food/food-details/{id}', [App\Http\Controllers\Food\FoodController::class, 'cart'])->name('food.cart');

Route::get('food/cart', [App\Http\Controllers\Food\FoodController::class, 'displaycartItems'])->name('food.display.cart');

//delete cart item
Route::get('food/delete-cart/{id}', [App\Http\Controllers\Food\FoodController::class, 'deletecartItems'])->name('food.delete.cart');

Route::post('food/prepare-checkout', [App\Http\Controllers\Food\FoodController::class, 'prepareCheckout'])->name('prepare.checkout');
Route::get('/checkout/success', [App\Http\Controllers\Food\FoodController::class, 'checkoutSuccess'])->name('checkout.success');
Route::get('/checkout/cancel', [App\Http\Controllers\Food\FoodController::class, 'checkoutCancel'])->name('checkout.cancel');
Route::post('/reviews', [App\Http\Controllers\ReviewController::class, 'store'])->name('reviews.store');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

