<?php

use App\Livewire\Admin\Auth\ForgotPassword;
use App\Livewire\Admin\Auth\LoginComponent;
use App\Livewire\Admin\Auth\RegisterComponent;
use App\Livewire\Admin\Auth\ResetPassword;
use Illuminate\Support\Facades\Route;

// Route::middleware('guest')->group(function () {
//     Volt::route('register', 'pages.auth.register')
//         ->name('register');

//     Volt::route('login', 'pages.auth.login')
//         ->name('login');

//     Volt::route('forgot-password', 'pages.auth.forgot-password')
//         ->name('password.request');

//     Volt::route('reset-password/{token}', 'pages.auth.reset-password')
//         ->name('password.reset');
// });

Route::middleware("AdminGuest")->group(function () {
    // Login page
    Route::get("login", LoginComponent::class)->name("login");
    // Register Page
    // Route::get("register", RegisterComponent::class)->name("register");
    // Forget-password Page
    Route::get("forgot-password", ForgotPassword::class)->name("Forgot-password");
    // Reset-password Page
    Route::get("reset-password/{token}", ResetPassword::class)->name("reset-password");
});

Route::middleware("AdminAuth")->group(function () {
    // 
    Route::view("/", "admin.index")->name("index");

});

// Route::middleware('auth')->group(function () {
//     Volt::route('verify-email', 'pages.auth.verify-email')
//         ->name('verification.notice');

//     Route::get('verify-email/{id}/{hash}', VerifyEmailController::class)
//         ->middleware(['signed', 'throttle:6,1'])
//         ->name('verification.verify');

//     Volt::route('confirm-password', 'pages.auth.confirm-password')
//         ->name('password.confirm');
// });
