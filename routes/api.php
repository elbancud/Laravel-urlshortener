<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SaveUrl;
use App\Http\Controllers\RedirectToShortCut;

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

Route::middleware('auth:sanctum')->group(function () {
    // return $request->user();
});

Route::post('/main', SaveUrl::class)->name('main');
Route::post('/shortcut', RedirectToShortCut::class)->name('shortcut');
