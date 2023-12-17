<?php

use App\Http\Controllers\Api\ApiController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// API Routes
Route::post("register", [ApiController::class, "register"]);
// Route::post("login", [ApiController::class, "login"]);

// Route::group([
//     "middleware" => ["auth:api"]
// ], function(){
//     Route::get("profile", [ApiController::class, "profile"]);
//     Route::get("refresh", [ApiController::class, "refresh"]);
//     Route::get("logout", [ApiController::class, "logout"]);
// });
