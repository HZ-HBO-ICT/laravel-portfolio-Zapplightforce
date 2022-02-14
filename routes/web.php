<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/posts/{post}', [WelcomeController::class, 'test']);

Route::get('/faq', [WelcomeController::class, 'faq']);


Route::get('/{page}', [WelcomeController::class, 'show']);


Route::get('/blog/{post}', [WelcomeController::class, 'blog']);

