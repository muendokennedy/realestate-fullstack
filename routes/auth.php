<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use Illuminate\Support\Facades\Route;


Route::middleware('guest')->group(function(){

    Route::get('/signup', [RegisteredUserController::class, 'create'])
                ->name('customer.signup');

    Route::post('signup/customer', [RegisteredUserController::class, 'store'])
                ->name('customer.store');

    Route::get('login/customer', [AuthenticatedSessionController::class, 'create'])
                ->name('customer.login');

    Route::post('customer/authenticate', [AuthenticatedSessionController::class, 'store'])
                ->name('login.store');
});

Route::middleware('auth')->group(function () {

    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
                ->name('logout');
});
