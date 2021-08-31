<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;

use App\Http\Controllers\PostController;

use App\Http\Controllers\RoleController;
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

Route::get('/add-user', [UserController::class,'insertRecord']);

Route::get('/get-phone/{id}',[UserController::class,'fetchPhoneByUser']);

Route::get('/add-post', [PostController::class,'addPost']);
Route::get('/add-comment/{id}', [PostController::class,'addComment']);

Route::get('/get-comments/{id}',[PostController::class,'getCommentsByPost']);

Route::get('/add-role',[RoleController::class,'addRole']);
Route::get('/add-users',[RoleController::class,'addUsers']);

Route::get('/rolesbyuser/{id}',[RoleController::class,'getAllRolesByUser']);
Route::get('/usersbyrole/{id}',[RoleController::class,'getAllUsersbyRole']);