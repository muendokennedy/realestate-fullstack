<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProfileController;

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
});

require __DIR__.'/auth.php';

