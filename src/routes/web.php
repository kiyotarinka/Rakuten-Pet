<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RankutenController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [RankutenController::class, 'top']);
Route::get('/result', [RankutenController::class, 'result']);

Route::post('/', function () {
    return view('welcome');
});
