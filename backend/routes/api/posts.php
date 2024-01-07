<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\Posts\IndexController;
use App\Http\Controllers\Api\Posts\ShowController;

Route::get('/', IndexController::class)->name('index');
Route::get('{ulid}', ShowController::class)->name('show');