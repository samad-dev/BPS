<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\BuildingPermitController;
use App\Http\Controllers\Permit_status;
use App\Http\Controllers\PermittypeController;

Route::get('users', [ UserController::class,'index']);
Route::post('users', [ UserController::class,'store']);
Route::get('users/{user_id}', 'UserController@show');
Route::put('users/{user_id}', 'UserController@update');
Route::delete('users/{user_id}', 'UserController@destroy');
// Route::resource('projects', ProjectController::class);
Route::resource('building_permits', BuildingPermitController::class);


Route::get('projects', [ ProjectController::class,'index']);
Route::post('projects', [ ProjectController::class,'store']);


Route::get('permmit_status', [ Permit_status::class,'index']);
Route::post('permmit_status', [ Permit_status::class,'store']);

Route::get('permmit_type', [ PermittypeController::class,'index']);
Route::post('permmit_type', [ PermittypeController::class,'store']);
