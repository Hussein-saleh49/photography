<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::prefix("front")->name("front.")->group(function () {
    //=============Home page
    Route::view("index", "front.index")->name("index");
    //==============About page
    Route::view("about", "front.about")->name("about");
    //==============Collection page
    Route::view("collection", "front.collection")->name("collection");
    //==============Collection-details page
    Route::get('collection-details/{id}', function ($id) {
        return view('front.collection-details', compact('id'));
    })->name("collection-details");
    //==============Sercvices page
    Route::view("services", "front.services")->name("services");
    //==============Blog page
    Route::view("blog", "front.blog")->name("blog");
    //==============Blog-details page
    // Route::view("blog-details", "front.blog-details")->name("blog-details");
    Route::get('blog-details/{id}', function ($id) {
        return view('front.blog-details', compact('id'));
    })->name("blog-details");
    //==============Contact page
    Route::view("contact", "front.contact")->name("contact");

});
Route::prefix("admin")->name("admin.")->group(function () {
    Route::middleware("AdminAuth")->group(function () {

        //====================Dashboard
        Route::view("/", "admin.index")->name("index");
        //====================services page
        Route::view("services", "admin.services.index")->name("services.index");
        //====================collections page
        Route::view("collections", "admin.collections.index")->name("collections.index");
        //====================Blogs page
        Route::view("blogs", "admin.blogs.index")->name("blogs.index");
        //====================Messages page
        Route::view("messages", "admin.messages.index")->name("messages.index");
        //====================Subscribers page
        Route::view("subscribers", "admin.subscribers.index")->name("subscribers.index");
        //====================Settings page
        Route::view("settings", "admin.settings.index")->name("settings.index");
    });
    require __DIR__ . '/adminAuth.php';
});

// Route::view('dashboard', 'dashboard')
//     ->middleware(['auth', 'verified'])
//     ->name('dashboard');

// Route::view('profile', 'profile')
//     ->middleware(['auth'])
//     ->name('profile');
