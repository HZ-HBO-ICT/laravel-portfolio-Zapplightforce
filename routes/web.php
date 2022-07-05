<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\GradesController;
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

Route::resources([
    'blog' => BlogController::class,
    'faq' => FaqController::class
]);

//--------Other Routes-------

Route::get('/study', [GradesController::class, 'index']);
//Route::get('/study', [GradesController::class, 'index']);

Route::put('/study/{id}', [GradesController::class, 'update']);


Route::get('/', function () {
    return redirect('/homepage');
});

Route::get('/{page}', [WelcomeController::class, 'show']);


