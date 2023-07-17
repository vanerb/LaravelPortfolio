<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\AuthenticatedSessionController;
use App\Http\Controllers\ContactController;

Route::view('/', 'index')->name('home');

Route::view('/contacto', 'contact.contact')->name('contact');


Route::resource('posts', PostController::class, [
    'names'=>'posts',
    'parameters'=>['blog'=>'post']
]);

Route::view('/about', 'about')->name('about');

Route::view('/register', 'auth.register')->name('register');


Route::view('/login', 'auth.login')->name('login');
Route::post('/login', [AuthenticatedSessionController::class, 'store']);

Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

Route::post('/contacto', [ContactController::class, 'enviarCorreo']);

Route::post('/register', [RegisteredUserController::class, 'store']);



