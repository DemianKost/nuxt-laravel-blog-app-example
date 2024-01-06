<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\Posts\IndexController;

Route::get('/', IndexController::class)->name('index');