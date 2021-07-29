<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get(
    '/', [HomeController::class, 'index']
);

Route::get(
    '/contato',
    [HomeController::class, 'contato']
);

route::get(
    '/calculadora/{op}',
    [HomeController::class, 'calculadora']
);

Route::post(
    '/soma',
    [HomeController::class, 'soma']
);

Route::post(
    '/sub',
    [HomeController::class, 'sub']
);