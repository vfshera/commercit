<?php

use App\Http\Controllers\PagesController;
use App\Http\Livewire\ProductCollection;
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
Route::get('/products', function(){
    // $products = \App\Models\Product::with('productTags','brand')->get();

    return getProducts();
});




Route::prefix('/collections')->name('collections.')->group(function () {

    Route::get('/featured', ProductCollection::class)->name('featured');

});



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
