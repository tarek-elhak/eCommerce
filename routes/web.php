<?php

use App\Http\Controllers\AdminCategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminMemberController;
use App\Http\Controllers\AdminItemController;
use App\Http\Controllers\AdminCommentController;
use App\Http\Controllers\HomeController;
/*
 * front-routes
 */


Route::get("/",[HomeController::class,"index"]);

/*
 * Admin Routes
*/

Route::get("/admin/login" , [SessionController::class , "create"])->name("login");
Route::get("/admin/logout" , [SessionController::class , "destroy"])->name("logout");
Route::post("/admin/login" , [SessionController::class , "store"]);
Route::get("admin/dashboard" , [DashboardController::class , "index"])->middleware("auth");
Route::get("admin/members" , [AdminMemberController::class , "index"])->name("manage members")->middleware("auth");
route::get("admin/members/create" , [AdminMemberController::class , "create"])->name("create member")->middleware("auth");
Route::post("admin/members/store" , [AdminMemberController::class , "store"])->middleware("auth");
Route::get("admin/members/edit/{user:username}" , [AdminMemberController::class , "edit"])->name("edit member")->middleware("auth");
Route::post("admin/members/update/{user:username}" , [AdminMemberController::class , "update"])->middleware("auth");
Route::post("admin/members/destroy/{user:username}" , [AdminMemberController::class , "destroy"])->middleware("auth");
Route::post("admin/members/activate/{user:username}" , [AdminMemberController::class , "activate"])->middleware("auth");
Route::get("admin/categories/create" , [AdminCategoryController::class , "create"])->name("create category")->middleware("auth");
Route::post("/admin/categories/store" , [AdminCategoryController::class , "store"])->middleware("auth");
Route::get("/admin/categories" , [AdminCategoryController::class , "index"])->middleware("auth");
Route::get("admin/categories/edit/{category:category_name}" , [AdminCategoryController::class , "edit"])->middleware("auth");
Route::post("admin/categories/update/{category:category_name}",[AdminCategoryController::class , "update"])->middleware("auth");
Route::post("admin/categories/destroy/{category:category_name}",[AdminCategoryController::class , "destroy"])->middleware("auth");
Route::get("/admin/items/create", [AdminItemController::class,"create"])->name("add item")->middleware("auth");
Route::post("admin/items/store" , [AdminItemController::class , "store"])->middleware("auth");
Route::get("admin/items" , [AdminItemController::class , "index"])->name("manage items")->middleware("auth");
Route::get("/admin/items/edit/{item:name}" , [AdminItemController::class , "edit"])->name("edit item")->middleware("auth");
Route::post("/admin/items/update/{item:name}",[AdminItemController::class , "update"])->name("update item")->middleware("auth");
Route::post("/admin/items/destroy/{item:name}", [AdminItemController::class, "destroy"])->name("delete item")->middleware("auth");
Route::post("/admin/items/approve/{item:name}",[AdminItemController::class , "approve"])->name("approve item")->middleware("auth");
Route::get("/admin/comments", [AdminCommentController::class, "index"])->name("manage comments")->middleware("auth");
Route::get("/admin/comments/edit/{comment}",[AdminCommentController::class,"edit"])->middleware("auth");
Route::put("/admin/comments/update/{comment}",[AdminCommentController::class,"update"])->middleware("auth");
Route::delete("/admin/comments/destroy/{comment}",[AdminCommentController::class,"destroy"])->middleware("auth");
Route::put("/admin/comments/approve/{comment}",[AdminCommentController::class , "approve"])->middleware("auth");
Route::get("admin/comments/{item:name}/show",[AdminCommentController::class,"show"])->middleware("auth");
