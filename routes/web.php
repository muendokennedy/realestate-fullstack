<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\InformationController;
use App\Http\Controllers\Admin\AdminController;

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

// Routes to display all the pages of the of the application
Route::get('/', [PagesController::class, 'home'])->name('home');
Route::get('/urban/plots', [PagesController::class, 'urbanPlots'])->name('urban');
Route::get('/upcountry/plots', [PagesController::class, 'upcountryPlots'])->name('upcountry');
Route::get('/buildings/apartments', [PagesController::class, 'apartments'])->name('apartments');
Route::get('/buildings/houses', [PagesController::class, 'houses'])->name('houses');
Route::get('/contact', [PagesController::class, 'contact'])->name('contact');

Route::middleware('auth')->group(function(){
    Route::get('/conditions', [PagesController::class, 'conditions'])->name('conditions');
    Route::post('/handle/information', [PagesController::class, 'handleInfo'])->name('handleinfo');
    Route::get('/information', [PagesController::class, 'information'])->name('information');
    Route::post('/store/information', [InformationController::class, 'userInfo'])->name('userinfo');
});

require __DIR__.'/auth.php';
require __DIR__. '/adminauth.php';

Route::prefix('admin')->group(function(){
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/analytics', [AdminController::class, 'analytics'])->name('admin.analytics');
    Route::get('/products', [AdminController::class, 'products'])->name('admin.products');
    Route::get('/orders', [AdminController::class, 'orders'])->name('admin.orders');
    Route::get('/stock', [AdminController::class, 'stock'])->name('admin.stock');
    Route::get('/clientinfo', [AdminController::class, 'clientinfo'])->name('admin.client');
    Route::get('/settings', [AdminController::class, 'settings'])->name('admin.settings');
    // The routes for storing the product into the database
    Route::post('/addnewproduct', [ProductController::class, 'store'])->name('product.store');
    Route::get('/product/edit/{product}', [ProductController::class, 'edit'])->name('product.edit');
    Route::put('/product/edit/{product}', [ProductController::class, 'update'])->name('product.update');
    Route::delete('/product/delete/{product}', [ProductController::class, 'destroy'])->name('product.delete');

});

