<?php

use App\Http\Controllers\Api\Auth\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::namespace('\App\Http\Controllers\Api')
    ->group(function () {
        Route::post('login', [AuthController::class, "login"]);

        Route::middleware(['auth:api'])->group(function () {
            Route::get('me', [AuthController::class, "me"]);
            Route::post('logout', [AuthController::class, "logout"]);

            Route::get("my-resume", "ResumeController@getMyResume");

            Route::apiResources([
                'resume' => 'ResumeController'
            ]);
        });
    });
