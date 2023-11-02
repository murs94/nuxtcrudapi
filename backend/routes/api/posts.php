<?php

declare(strict_types=1);

use App\Http\Controllers\Api\Posts\IndexController;
use Illuminate\Support\Facades\Route;

Route::get('/', IndexController::class)->name('index');
