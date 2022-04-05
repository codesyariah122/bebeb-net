<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\BebebApiController;

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
Route::prefix('v1')->group(function () {
    Route::get('/data/homepage/{app_key}', [BebebApiController::class, 'web_page']);
    Route::post('/send-message/{app_key}', [BebebApiController::class, 'send_message']);
    Route::get('/articles/{app_key}', [BebebApiController::class, 'blog_articles']);
    Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
        return $request->user();
    });
});
