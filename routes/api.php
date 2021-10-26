<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\EditorialController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/infouser', [AuthController::class, 'infoUser']);

Route::get('/usuarios', [UserController::class, 'index']);
Route::get('/usuarios/{id}', [UserController::class, 'show']);
Route::post('/usuarios', [UserController::class, 'store']);
Route::put('/usuarios/{user}', [UserController::class, 'update']);
Route::delete('/usuarios/{id}', [UserController::class, 'destroy']);

Route::get('/editoriales', [EditorialController::class, 'index']);
Route::get('/editoriales/{id}', [EditorialController::class, 'show']);
Route::post('/editoriales', [EditorialController::class, 'store']);
Route::put('/editoriales/{editorial}', [EditorialController::class, 'update']);
Route::delete('/editoriales/{id}', [EditorialController::class, 'destroy']);
