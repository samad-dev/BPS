<?php

use App\Http\Controllers\Admin\VendorTypeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/index', function () {
    return view('dashboard/index');
});

    // Vendor Types
    // Route::delete('vendor-types/destroy', 'VendorTypeController@massDestroy')->name('vendor-types.massDestroy');
    // Route::get('/vendor-types', [VendorTypeController::class, 'index']);
// Route::get('/vendor-types', function () {
//     return view('types/index');
// });
Route::get('/Permission', function () {
    return view('um/permission');
});
Route::get('/role', function () {
    return view('um/role');
});
Route::get('/user', function () {
    return view('um/user');
});