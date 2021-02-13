<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UsersRoleController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//ROUTES USERS
Route::get("/users",[UserController::class , 'index']);
Route::post("/user",[UserController::class,'store']);
Route::put("/users/{id}",[UserController::class ,'update']);
Route::delete("/users/{id}",[UserController::class ,'destroy']);

Route::get("/settings",[SettingController::class , 'index']);
Route::post("/setting",[SettingController::class,'store']);
Route::put("/settings/{id}",[SettingController::class ,'update']);
Route::delete("/settings/{id}",[SettingController::class ,'destroy']);

Route::get("/roles",[RoleController::class , 'index']);
Route::post("/role",[RoleController::class,'store']);
Route::put("/roles/{id}",[RoleController::class ,'update']);
Route::delete("/roles/{id}",[RoleController::class ,'destroy']);

Route::get("/users_roles",[UsersRoleController::class , 'index']);
Route::post("/users_role",[UsersRoleController::class,'store']);
Route::put("/users_roles/{id}",[UsersRoleController::class ,'update']);
Route::delete("/users_roles/{id}",[UsersRoleController::class ,'destroy']);
