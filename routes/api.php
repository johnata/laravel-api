<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\JobsController;
use App\Http\Controllers\CompaniesController;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/', function () {
    return response()->json(['message' => 'Jobs API', 'status' => 'Connected']);;
});

Route::resource('jobs', JobsController::class);
Route::resource('companies', CompaniesController::class);
