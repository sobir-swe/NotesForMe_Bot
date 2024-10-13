<?php

use App\Http\Controllers\BotController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/sendMessage', [BotController::class, 'sendMessage']);
Route::post('/start', [BotController::class, 'startCommand']);
