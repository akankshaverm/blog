<?php

use App\Http\Controllers\LoginController;
use App\Models\Topic;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//return view('welcome');
//});

Route::view("/", "home")->name('homepage');

Route::get("/view/{post_id}", function ($post_id) {
    return view("singlePost", ['post_id' => $post_id]);
})->name("post.show");

Route::get("/filter/{cat_id}", function ($cat_id) {
    $topic = Topic::find($cat_id);
    return view("filter", ['cat_id' => $cat_id, 'topic' => $topic]);
})->name('filter');

Route::prefix("admin")->group(function () {
    Route::get("/", function () {
        return view("admin.dashboard");
    })->name("admin.dashboard");

    Route::get("/topics", function () {
        return view("admin.topic");
    })->name("admin.topics");

    Route::get("/posts", function () {
        return view("admin.manage-post");
    })->name("admin.posts");

    Route::get("/posts/create", function () {
        return view("admin.insert-post");
    })->name("admin.posts.create");
});
Route::get("/signup", function () {
    return view("register");
})->name('signup');
Route::get("/login", function () {
    return view("login");
})->name('login');

Route::get('auth/google', [LoginController::class, 'redirectToGoogle']);
Route::get('auth/auth_logout', [LoginController::class, 'auth_logout'])->name('logout');
Route::get('auth/google/callback', [LoginController::class, 'handleGoogleCallback']);
