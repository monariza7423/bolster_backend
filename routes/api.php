<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ThreadBbsController;
use App\Http\Controllers\ThreadBbsReplyController;

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

Route::post('/contact', [ContactController::class, 'store']);

Route::post('/thread_bbs', [ThreadBbsController::class, 'store']);
Route::get('/thread_bbs', [ThreadBbsController::class, 'index']);
Route::get('/thread_bbs/{id}', [ThreadBbsController::class, 'show']);
Route::patch('/thread_bbs/{id}', [ThreadBbsController::class, 'update']);
Route::delete('/thread_bbs/{id}', [ThreadBbsController::class, 'destroy']);

Route::post('/thread_bbs_reply', [ThreadBbsReplyController::class, 'store']);
Route::get('/thread_bbs_replies', [ThreadBbsReplyController::class, 'index']);
