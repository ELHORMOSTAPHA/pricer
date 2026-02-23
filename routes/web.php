<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChatbotController;
Route::get('/', function () {
    return view('welcome');
});
Route::post('/chatbot', [ChatbotController::class, 'reply'])->name('chatbot.reply');