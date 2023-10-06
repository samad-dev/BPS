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
    return view('auth/login');
});

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');


Route::get('/index', function () {
    return view('dashboard/index');
});
Route::get('/project', function () {
    return view('projects/project');
});
Route::get('/new_project', function () {
    return view('projects/new_project');
});
Route::get('/permit_status', function () {
    return view('permits/permit_status');
});
Route::get('/permit_type', function () {
    return view('permits/permit_type');
});
Route::get('/building_permits', function () {
    return view('permits/buliding_permits');
});
Route::get('/team', function () {
    return view('team/team');
});
Route::get('/assign_user_team', function () {
    return view('team/assign_user_team');
});
Route::get('/assign_team_user', function () {
    return view('team/assign_to_user_inpection');
});

Route::get('/development_permits', function () {
    return view('development_permit/development_permits');
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