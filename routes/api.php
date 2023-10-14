<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CorsMiddleware;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\BuildingPermitController;
use App\Http\Controllers\Permit_status;
use App\Http\Controllers\PermittypeController;
use App\Http\Controllers\Inpections;
use App\Http\Controllers\Login;



Route::group(['middleware' => CorsMiddleware::class,'handle'], function () {
    
    Route::get('users', [ UserController::class,'index']);
    Route::get('users/{user_id}', [ UserController::class,'show']);
    Route::delete('users/{user_id}', [ UserController::class,'destroy']);
    Route::post('users', [ UserController::class,'store']);
    Route::put('users/{user_id}', 'UserController@update');
    
    
    Route::get('projects', [ ProjectController::class,'index']);
    Route::post('projects', [ ProjectController::class,'store']);
    
    
    Route::get('permmit_status', [ Permit_status::class,'index']);
    Route::post('permmit_status', [ Permit_status::class,'store']);
    
    Route::get('permmit_type', [ PermittypeController::class,'index']);
    Route::post('permmit_type', [ PermittypeController::class,'store']);
    
    Route::get('building_permits', [ BuildingPermitController::class,'index']);
    Route::post('building_permits', [ BuildingPermitController::class,'store']);
    Route::get('applicant_propery/{user_id}', [ BuildingPermitController::class,'applicant_property']);
    

    Route::get('inspections', [ Inpections::class,'index']);
    Route::post('inspections', [ Inpections::class,'store']);

    Route::get('login/{email}/{password}', [ Login::class,'login']);

    // Your API routes go here
});
