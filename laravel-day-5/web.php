<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/detail/{id}', [HomeController::class, 'detail'])->name('detail');
Route::get('/full-name', [HomeController::class, 'fullName'])->name('full-name');
Route::post('/full-name', [HomeController::class, 'makeFullName'])->name('full-name');
Route::get('/calculator', [HomeController::class, 'calculator'])->name('calculator');
Route::post('/result', [HomeController::class, 'makeResult'])->name('result');
Route::get('/password-generator', [HomeController::class, 'passwordGenerator'])->name('password-generator');
Route::post('/password-generator', [HomeController::class, 'newPassword'])->name('password-generator');
Route::get('/string-word-count', [HomeController::class, 'stringWordAndCountCharGenerator'])->name('string-word-count');
Route::post('/string-word-count', [HomeController::class, 'wordCharCount'])->name('string-word-count');
Route::get('/add-product', [ProductController::class, 'index'])->name('add-product');
Route::post('/new-product', [ProductController::class, 'create'])->name('new-product');
Route::get('/manage-product', [ProductController::class, 'manage'])->name('manage-product');
Route::get('/update-product/{id}', [ProductController::class, 'updatePage'])->name('update-product');
Route::post('/update-product/{id}', [ProductController::class, 'update'])->name('update-product');