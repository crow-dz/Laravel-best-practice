<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterUserController;

Route::view('/', 'index');
Route::view('/contact', 'contact');

// Jobs Routes
Route::resource('jobs', JobController::class, [
    'only' => ['index', 'create', 'store', 'show', 'destroy']
]);

// Posts Routes
Route::controller(PostController::class)->group(function ($route) {
    $route->get('/blogs', 'index')->name('blogs.index');
    $route->get('/blogs/create', 'create')->name('blogs.create');
    $route->post('/blogs/store', 'store')->name('blogs.store');
    $route->get('/blogs/{id}', 'show')->name('blogs.show');
    $route->get('/blogs/edit/{id}', 'edit')->name('blogs.edit');
    $route->put('/blogs/update/{post}', 'update')->name('blogs.update');
    $route->delete('/blogs/delete/{post}', 'destroy')->name('blogs.destroy');
});

// Auth Routes
Route::controller(RegisterUserController::class)->group(function ($route) {
    $route->get('/register', 'create')->name('auth.register');
});
