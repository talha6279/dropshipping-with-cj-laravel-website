<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CJController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CJProductController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\API\CJWebhookController;
use App\Http\Controllers\ProductImportController;




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/admin/dashboard',[HomeController::class, 'index'])->middleware(['auth','admin'])->name('admin.dashboard');
Route::get('/view/order',[HomeController::class, 'vieworder'])->middleware(['auth','admin'])->name('view.orders');
Route::get('/status/shipped/{id}',[HomeController::class, 'shipped'])->middleware(['auth','admin'])->name('order.shipped');
Route::get('/status/delieverd/{id}',[HomeController::class, 'delieverd'])->middleware(['auth','admin'])->name('order.delieverd');
Route::get('/dash-board',[HomeController::class, 'dash'])->middleware(['auth','verified'])->name('dashboard');
Route::get('/',[HomeController::class, 'home'])->name('website');
Route::get('/contact',[HomeController::class, 'contact'])->name('contact');
Route::get('/cart',[HomeController::class, 'cart'])->middleware(['auth','verified'])->name('cart');
Route::get('/checkout',[HomeController::class, 'checkout'])->middleware(['auth','verified'])->name('checkout');
Route::get('/product/detail/{id}',[HomeController::class, 'productdetail'])->name('product-detail');
Route::get('/cart/{id}',[HomeController::class, 'addcart'])->middleware(['auth','verified'])->name('add-cart');
Route::delete('/cart/{id}', [HomeController::class, 'deletecart'])->middleware(['auth', 'verified'])->name('delete-cart');
Route::post('confirm/order/',[HomeController::class, 'confirmorder'])->middleware(['auth','verified'])->name('confirm-order');

Route::post('/review',[ReviewController::class, 'store'])->name('review.store');


Route::prefix('product/category')->name('product.category.')->group(function () {
    Route::get('/add', [CategoryController::class, 'index'])->name('add');
    Route::post('/add', [CategoryController::class, 'store']);
    Route::get('/show', [CategoryController::class, 'show'])->name('show');
    Route::get('/edit/{id}', [CategoryController::class, 'edit'])->name('edit');
    Route::post('/update/{id}', [CategoryController::class, 'update'])->name('update');
    Route::get('/delete/{id}', [CategoryController::class, 'destroy'])->name('delete');
});

Route::prefix('product/subcategory')->name('product.subcategory.')->group(function () {
    Route::get('/add', [SubCategoryController::class, 'index'])->name('add');
    Route::post('/add', [SubCategoryController::class, 'store']);
    Route::get('/show', [SubCategoryController::class, 'show'])->name('show');
    Route::get('/edit/{id}', [SubCategoryController::class, 'edit'])->name('edit');
    Route::post('/update/{id}', [SubCategoryController::class, 'update'])->name('update');
    Route::get('/delete/{id}', [SubCategoryController::class, 'destroy'])->name('delete');
});

Route::prefix('product')->controller(ProductController::class)->name('product.')->group(function () {
    Route::get('/add','index')->name('add');
    Route::post('/add','store');
    Route::get('/show','show')->name('show');
    Route::get('/edit/{id}','edit')->name('edit');
    Route::post('/update/{id}','update')->name('update');
    Route::get('/delete/{id}','destroy')->name('delete');
    Route::get('/permdeleted/{id}','permdeleted')->name('permdeleted');
    Route::get('/restore/{id}','restore')->name('restore');
    Route::get('/trashshow','trashshow')->name('trashshow');
    
    
});

Route::controller(HomeController::class)->group(function(){

    Route::get('stripe/{value}', 'stripe');

    Route::post('stripe/{value}', 'stripePost')->name('stripe.post');

});




// Route::get('/product/{pid}', [ProductImportController::class, 'show'])->name('product.show');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');
