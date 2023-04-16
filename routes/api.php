<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\DictionaryController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('get-all-data', [DictionaryController::class, 'getAllData']);
Route::post('get-meaning-data', [DictionaryController::class, 'getMeaning']);
Route::post('a-data', [DictionaryController::class, 'getAData']);
Route::post('b-data', [DictionaryController::class, 'getBData']);
Route::post('c-data', [DictionaryController::class, 'getCData']);
Route::post('d-data', [DictionaryController::class, 'getDData']);
Route::post('e-data', [DictionaryController::class, 'getEData']);
Route::post('f-data', [DictionaryController::class, 'getFData']);
Route::post('g-data', [DictionaryController::class, 'getGData']);
Route::post('h-data', [DictionaryController::class, 'getHData']);
Route::post('i-data', [DictionaryController::class, 'getIData']);
Route::post('j-data', [DictionaryController::class, 'getJData']);
Route::post('k-data', [DictionaryController::class, 'getKData']);
Route::post('l-data', [DictionaryController::class, 'getLData']);
Route::post('m-data', [DictionaryController::class, 'getMData']);
Route::post('n-data', [DictionaryController::class, 'getNData']);
Route::post('o-data', [DictionaryController::class, 'getOData']);
Route::post('p-data', [DictionaryController::class, 'getPData']);
Route::post('q-data', [DictionaryController::class, 'getQData']);
Route::post('r-data', [DictionaryController::class, 'getRData']);
Route::post('s-data', [DictionaryController::class, 'getSData']);
Route::post('t-data', [DictionaryController::class, 'getTData']);
Route::post('u-data', [DictionaryController::class, 'getUData']);
Route::post('y-data', [DictionaryController::class, 'getYData']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
