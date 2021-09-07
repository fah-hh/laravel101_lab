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
// [ControllerClass, return function]

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', [\App\Http\Controllers\HelloController::class, "index"]);

Route::get('/hello/array', [\App\Http\Controllers\HelloController::class, "array"])
    ->name("hello.array"); // name route

// ตำแหน่งพารามิเตอร์ในปีกกาต้องตรงกับตำแหน่งพารามิเตอร์ในฟังก์ชัน
// ? optional ต่อท้าย
Route::get('/posts/{id?}', [\App\Http\Controllers\HelloController::class, "posts"]);

Route::get('about', [\App\Http\Controllers\HelloController::class, "about"]);

Route::resource('apartments', \App\Http\Controllers\ApartmentController::class);