<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChatbotController;
Route::get('/', function () {
    return view('welcome');
});
Route::post('/chatbot', [ChatbotController::class, 'reply'])
    ->middleware('throttle:chatbot')
    ->name('chatbot.reply');

Route::post('/contact', [ChatbotController::class, 'contact'])
    ->middleware('throttle:contact-form')
    ->name('contact.submit');