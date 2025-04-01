<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('form');
});

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');


