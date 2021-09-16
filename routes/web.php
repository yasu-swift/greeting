<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/', function () {
    return '<h1>Hello from Root!!!!!</h1>';
});
Route::get('/comments/{greeting}', [App\Http\Controllers\CommentsController::class, 'greeting']);
Route::get('/comments/{greeting}/{freeword}', [App\Http\Controllers\CommentsController::class, 'free']);
