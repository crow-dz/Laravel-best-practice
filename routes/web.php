<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\SessionsController;

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterUserController;
use App\Jobs\JobTranslate;
use App\Mail\JobPosted;
use App\Models\Job;
use Illuminate\Support\Facades\Mail;

Route::view('/', 'index');
Route::view('/contact', 'contact');
Route::get('/tran', function(){
    
    $job = Job::find(1);
    JobTranslate::dispatch($job);
    return 'done';
});





// Jobs Routes
Route::get('/jobs', [JobController::class, 'index']);
Route::get('/jobs/create', [JobController::class, 'create']);
Route::post('/jobs', [JobController::class, 'store'])->middleware('auth');
Route::get('/jobs/{job}', [JobController::class, 'show']);

Route::get('/jobs/{job}/edit', [JobController::class, 'edit'])
    ->middleware('auth')
    ->can('edit', 'job');

Route::patch('/jobs/{job}', [JobController::class, 'update']);
Route::delete('/jobs/{job}', [JobController::class, 'destroy']);

// Posts Routes
Route::controller(PostController::class)->group(function ($route) {
    $route->get('/blogs', 'index')->name('blogs.index');
    $route->get('/blogs/create', 'create')->name('blogs.create');
    $route->post('/blogs/store', 'store')->name('blogs.store');
    $route->get('/blogs/{id}', 'show')->name('blogs.show');
    $route->get('/blogs/edit/{id}', 'edit')->name('blogs.edit')->middleware('auth');
    $route->put('/blogs/update/{post}', 'update')->name('blogs.update');
    $route->delete('/blogs/delete/{post}', 'destroy')->name('blogs.destroy');
});

// Auth Routes
Route::controller(RegisterUserController::class)->group(function ($route) {
    $route->get('/register', 'create')->name('auth.register');
    $route->post('/register', 'store')->name('auth.register');

});
// Auth Routes
Route::controller(SessionsController::class)->group(function ($route) {
    $route->get('/login', 'create')->name('auth.login');
    $route->post('/login', 'store');
    $route->post('/logout', 'destroy');


});