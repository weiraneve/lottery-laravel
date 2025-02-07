<?php

use App\Http\Controllers\HeroController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'hello world';
});

Route::get('/heroes', [HeroController::class, 'index']);
