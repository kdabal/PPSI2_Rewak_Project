<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\StorageController;
use App\Http\Controllers\SupplyController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\GithubController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::get('/api', function () {
    return \File::get('\docs\request-docs\index.html');
});
Route::get('/products', [ProductController::class, 'index']);
Route::get('/products/{id}', [ProductController::class, 'show']);
Route::get('/products/search/{name}', [ProductController::class, 'search']);

//LOGIN AND SIGGUP
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

//GITHUB
Route::get('/auth/redirect', [GithubController::class, 'redirect']);
Route::get('/auth/callback', [GithubController::class, 'callback']);


Route::group(['middleware' => ['auth:sanctum']], function () {
    //products
    Route::post('/products', [ProductController::class, 'store']);
    Route::put('/products/{id}', [ProductController::class, 'update']);
    Route::delete('/products/{id}', [ProductController::class, 'destroy']);

    //storage
    Route::get('/storage', [StorageController::class, 'storage']);
    Route::get('/storage/all', [StorageController::class, 'index']);
    Route::get('/storage/{id}', [StorageController::class, 'show']);
    Route::get('/storage/{userid}', [StorageController::class, 'search']);
    Route::post('/storage', [StorageController::class, 'store']);
    Route::put('/storage/{id}', [StorageController::class, 'update']);
    Route::delete('/storage/{id}', [StorageController::class, 'destroy']);

    //supply
    Route::get('/supply', [SupplyController::class, 'index']);
    Route::get('/supply/list', [SupplyController::class, 'supply']);
    Route::get('/supply/list/{productid}', [SupplyController::class, 'showSupply']);
    Route::get('/supply/show/{id}', [SupplyController::class, 'show']);
    Route::post('/supply', [SupplyController::class, 'store']);
    Route::put('/supply/{id}', [SupplyController::class, 'update']);
    Route::delete('/supply/{id}', [SupplyController::class, 'destroy']);

    //user
    Route::post('/logout', [AuthController::class, 'logout']);
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
