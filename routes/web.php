<?php

use App\Http\Controllers\PagesController;
use App\Http\Livewire\{
    ProductCollection,
    FeaturedCollection,
    PaymentPortal,
    ProductView
};
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PagesController::class,'index'])->name('welcome');





Route::prefix('/collections')->name('collections.')->group(function () {

    Route::get('/featured', ProductCollection::class)->name('featured');

    Route::get('/category-{category}-{categorySlug}', ProductCollection::class)->name('category-view');

    Route::get('/categories', [PagesController::class , 'categories'])->name('categories');

    Route::get('/product-view/{product}-{productSlug}', ProductView::class)->name('product-view');

});

Route::get('/payment', PaymentPortal::class)->name('payment-portal');




Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
