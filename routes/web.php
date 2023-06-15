<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PetController;
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

Auth::routes();

Route::get('PList', [PetController::class,'index']);
Route::get('Add-List', [PetController::class,'AddList']);
Route::post('Save-List', [PetController::class,'SaveList']);
Route::get('edit-List/{id}', [PetController::class,'editList']);
Route::post('Update-List', [PetController::class,'UpdateList']);
Route::get('delete-List/{id}', [PetController::class,'deleteList']);