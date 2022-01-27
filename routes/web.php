<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\DashboardController;
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
    return view('welcome');
});

/*
 * Admin Routes
*/

Route::get("/admin/login" , [SessionController::class , "create"])->name("login");
Route::post("/admin/login" , [SessionController::class , "store"]);
Route::get("admin/dashboard" , [DashboardController::class , "index"])->middleware("auth");
