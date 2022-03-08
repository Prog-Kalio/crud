<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\UserController;
use App\Http\Controllers\api\AssetController;
use App\Http\Controllers\api\VendorController;
use App\Http\Controllers\api\AssetAssignmentController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


//USER ENDPOINTS
Route::get('user', [UserController::class, 'index']); //To read all
Route::get('user/{id}', [UserController::class, 'show']); //To read specific
Route::post('user', [UserController::class, 'store']); //To create
Route::put('user/{id}', [UserController::class, 'update']); //To update or edit
Route::delete('user/{id}', [UserController::class, 'destroy']); //To delete
// Testing: http://127.0.0.1:8000/api/user/
// Unit Test: http://127.0.0.1:8000/api/user/1


//ASSET ENDPOINTS
Route::get('asset', [AssetController::class, 'index']); //To read all
Route::get('asset/{id}', [AssetController::class, 'show']); //To read specific
Route::post('asset', [AssetController::class, 'store']); //To create
Route::put('asset/{id}', [AssetController::class, 'update']); //To update or edit
Route::delete('asset/{id}', [AssetController::class, 'destroy']); //To delete
// Testing: http://127.0.0.1:8000/api/asset/
// Unit Test: http://127.0.0.1:8000/api/asset/1


// VENDORS ENDPOINTS
Route::get('vendor', [VendorController::class, 'index']); //To read all
Route::get('vendor/{id}', [VendorController::class, 'show']); //To read specific
Route::post('vendor', [VendorController::class, 'store']); //To create
Route::put('vendor/{id}', [VendorController::class, 'update']); //To update or edit
Route::delete('vendor/{id}', [VendorController::class, 'destroy']); //To delete
// Testing: http://127.0.0.1:8000/api/vendor/
// Unit Test: http://127.0.0.1:8000/api/vendor/1


// ASSET-ASSIGNMENT ENDPOINT
Route::get('asset_assignment', [AssetAssignmentController::class, 'index']); //To read all
Route::get('asset_assignment/{id}', [AssetAssignmentController::class, 'show']); //To read specific
Route::post('asset_assignment', [AssetAssignmentController::class, 'store']); //To create
Route::put('asset_assignment/{id}', [AssetAssignmentController::class, 'update']); //To update or edit
Route::delete('asset_assignment/{id}', [AssetAssignmentController::class, 'destroy']); //To delete
// Testing: http://127.0.0.1:8000/api/asset_assignment/
// Unit Test: http://127.0.0.1:8000/api/asset_assignment/1