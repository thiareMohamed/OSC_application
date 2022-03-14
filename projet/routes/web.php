<?php

use App\Models\Pays;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaysController;
use App\Http\Controllers\EntrepriseController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pays', [PaysController::class,'index']);

Route::get('/entreprise', [EntrepriseController::class,'index']);
Route::get('/entreprise/create', [EntrepriseController::class,'create']);
Route::post('/entreprise/store', [EntrepriseController::class,'store']);
Route::get('/entreprise/{id}', [EntrepriseController::class,'show']);



