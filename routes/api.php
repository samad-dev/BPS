<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\BuildingPermitController;

Route::resource('users', UserController::class);
Route::resource('projects', ProjectController::class);
Route::resource('building_permits', BuildingPermitController::class);
