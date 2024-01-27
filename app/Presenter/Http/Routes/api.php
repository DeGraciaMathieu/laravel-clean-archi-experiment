<?php

use Illuminate\Support\Facades\Route;
use App\Presenter\Http\Controllers\CreatePostController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('/posts/create', CreatePostController::class);
