<?php

use App\Http\Controllers\BirdController;
use Audubon\Entities\Bird;
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

Route::get('/', [BirdController::class, 'index']);
Route::get('/create-sighting', [BirdController::class, 'create']);
Route::post('/store-sighting', [BirdController::class, 'store']);