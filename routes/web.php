<?php

use App\Http\Controllers\LinksController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/links', [LinksController::class, 'index']);

Route::get('/links/create', [LinksController::class, 'create']);

Route::post('/links/salvar', [LinksController::class, 'store']);

Route::get('/{shortLink}', [LinksController::class, 'redirect']);

