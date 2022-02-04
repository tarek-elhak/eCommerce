<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminMemberController;
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
Route::get("admin/members" , [AdminMemberController::class , "index"])->name("manage members")->middleware("auth");
route::get("admin/members/create" , [AdminMemberController::class , "create"])->name("create member")->middleware("auth");
Route::post("admin/members/store" , [AdminMemberController::class , "store"])->middleware("auth");
Route::get("admin/members/edit/{user:username}" , [AdminMemberController::class , "edit"])->name("edit member")->middleware("auth");
Route::post("admin/members/update/{user:username}" , [AdminMemberController::class , "update"])->middleware("auth");
Route::post("admin/members/destroy/{user:username}" , [AdminMemberController::class , "destroy"])->middleware("auth");
