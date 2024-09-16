<?php

use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//return view('welcome');
//});

Route::view("/", "home")->name('homepage');

Route::get("/view/{post_id}", function ($post_id) {
    return view("singlePost");
})->name("post.show");

Route::get("/filter", function () {
    return view("filter");
})->name('filter');

Route::prefix("admin")->group(function () {
    Route::get("/", function () {
        return view("admin.dashboard");
    })->name("admin.dashboard");

    Route::get("/topics", function () {
        return view("admin.topic");
    })->name("admin.topics");
});
