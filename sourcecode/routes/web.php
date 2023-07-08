<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PetBoardingController;

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
    return view('home');
})->name('home');

Route::get('/boarding', [PetBoardingController::class, 'index'])->name('boardings.index');
Route::get('/boarding/create', [PetBoardingController::class, 'create'])->name('boardings.create');
Route::post('/boarding', [PetBoardingController::class, 'store'])->name('boardings.store');
Route::get('/boarding/{id}/edit', [PetBoardingController::class, 'edit'])->name('boardings.edit');
Route::put('/boarding/{id}', [PetBoardingController::class, 'update'])->name('boardings.update');
Route::delete('/boarding/{id}', [PetBoardingController::class, 'destroy'])->name('boardings.destroy');