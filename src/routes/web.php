<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\UserController;

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

Route::get('/register', [UserController::class, 'create']);
Route::post('/register', [UserController::class, 'registerStore']);
Route::get('/login', [UserController::class, 'loginCreate']);
Route::post('/login', [UserController::class, 'loginStore']);
Route::get('/item/{id}', [ItemController::class, 'show'])->name('item.show');
Route::middleware('auth')->get('mypage/profile', [UserController::class, 'addProfilecreate'])->name('mypage_profile');
Route::middleware('auth')->post('mypage/profile', [UserController::class, 'addProfilestore'])->name('mypage_profile_store');
Route::middleware('auth')->get('/', [ItemController::class, 'index']);
Route::middleware('auth')->get('/purchase/{id}', [ItemController::class, 'buy'])->name('item.buy');
Route::middleware('auth')->get('/purchase/address/{id}', [UserController::class, 'addressEditcreate']);
Route::post('/logout', [UserController::class, 'logout']);

// Route::get('/', [UserController::class, 'index'])->middleware(['auth', 'AddProfile'])->name('/');
// Route::middleware('auth')->group(function(){
    // Route::get('/', [ItemController::class, 'index']);
// });
// Route::get('/item/{item_id}', [ItemController::class, 'show']);
// Route::post('/mypage/profile', [UserController::class, 'store']);
