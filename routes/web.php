<?php

use App\Http\Controllers\Admin\VendorTypeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');


Route::get('/index', function () {
    return view('dashboard/index');
});

    // Vendor Types
    // Route::delete('vendor-types/destroy', 'VendorTypeController@massDestroy')->name('vendor-types.massDestroy');
    // Route::get('/vendor-types', [VendorTypeController::class, 'index']);
// Route::get('/vendor-types', function () {
//     return view('types/index');
// });
Route::get('/vendor-types', function () {
    $types = DB::table('types')->select('company_id','title','parent_id','active')->get();
    return view('types/index', compact('types'));
});
Route::get('/status', function () {
    return view('status/index');
});

Route::get('/priority', function () {
    return view('priority/index');
});
Route::get('/impact', function () {
    return view('impact/index');
});
Route::get('/groups', function () {
    return view('groups/index');
});
Route::get('/domain', function () {
    return view('domain/index');
});
Route::get('/bu', function () {
    return view('bu/index');
});
Route::get('/vendor', function () {
    return view('vendor/index');
});
Route::get('/Subscription', function () {
    return view('Subscription/index');
});
Route::get('/Tickets', function () {
    return view('Tickets/index');
});
Route::get('/Tickets/{id}', function () {
    return view('Tickets/new');
});
Route::get('/Permission', function () {
    return view('um/permission');
});
Route::get('/role', function () {
    return view('um/role');
});
Route::get('/user', function () {
    return view('um/user');
});
Route::get('/designation', function () {
    return view('um/designation');
});
Route::get('/Company', function () {
    return view('company/index');
});