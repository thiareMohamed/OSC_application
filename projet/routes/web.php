<?php

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

Route::middleware(['auth'])->group(function () {
    Route::get('/', function () {
        return view('welcome');
    });
    
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['auth'])->name('dashboard');
    
    Route::get('/pays', [PaysController::class,'index']);

    Route::get('/entreprise', [EntrepriseController::class,'index']);
    Route::get('/entreprise/create', [EntrepriseController::class,'create']);
    Route::post('/entreprise/store', [EntrepriseController::class,'store']);
    Route::get('/entreprise/delete/{entreprise}', [EntrepriseController::class,'delete'])->name('entreprises.delete');
    Route::get('/entreprise/{entreprise}', [EntrepriseController::class,'show'])->name('entreprises.show');

});


require __DIR__.'/auth.php';

