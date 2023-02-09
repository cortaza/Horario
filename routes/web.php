<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;

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


/*PAGINA INICIAL*/
Route::get('/', function () {return view('index');});
/*FORMULARIOS*/

Route::get('/forms/program', [FormController::class,'form'])->name('form');
Route::get('/forms/program/edit', [FormController::class,'edit'])->name('edit');
Route::get('/forms/program/create', [FormController::class,'create'])->name('create');

/*DELETE */
Route::delete('/delete/{deleteprogram}', [FormController::class,'destroy'])->name('programs.destroy');
/*UPDATE*/
Route::get('edit/{game_id}', [FormController::class,'view'])->name('viewprogram');
Route::post('forms/updatevideogames', [FormController::class,'updatevideogame'])->name('updatevideogame');
/*CREATE*/
Route::get('forms/create', [FormController::class,'create'])->name('create');
Route::post('forms/storevideogame', [FormController::class,'storevideogame'])->name('createvideogame'); 