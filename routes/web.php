<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::prefix("front")->name(".front")->group(function () {
    //=============Home page
    Route::view("index", "front.index")->name("index");
    //==============About page
    Route::view("about", "front.about")->name("about");
    //==============Collection page
    Route::view("collection", "front.collection")->name("collection");
    //==============Sercvices page
    Route::view("services", "front.services")->name("services");
    //==============Blog page
    Route::view("blog", "front.blog")->name("blog");
    //==============Blog-details page
    Route::view("blog-details", "front.blog-details")->name("blog-details");
    //==============Contact page
    Route::view("contact", "front.contact")->name("contact");

});
Route::prefix("admin")->name(".admin")->group(function(){
Route::view("index","admin.index")->name("index");
});

// Route::view('dashboard', 'dashboard')
//     ->middleware(['auth', 'verified'])
//     ->name('dashboard');

// Route::view('profile', 'profile')
//     ->middleware(['auth'])
//     ->name('profile');

require __DIR__ . '/auth.php';
