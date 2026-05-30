<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LikeController;

Route::post('/likes', [LikeController::class, 'counting'])->name('likes.counting');
