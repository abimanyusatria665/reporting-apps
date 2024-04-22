<?php

use App\Http\Controllers\NeighbourhoodController;
use App\Http\Controllers\SubdistrictController;
use App\Http\Controllers\VillageController;
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


Route::get('/', [SubdistrictController::class, 'dashboard'])->name('subdistrict.data');
Route::get('/subdistrict', [SubdistrictController::class, 'index'])->name('subdistrict.data');
Route::get('/subdistrict/create', [SubdistrictController::class, 'create'])->name('subdistrict.create');
Route::post('/subdistrict/post', [SubdistrictController::class, 'store'])->name('subdistrict.store');
Route::get('/subdistrict/edit/{id}', [SubdistrictController::class, 'edit'])->name('subdistrict.edit');
Route::post('/subdistrict/update/{id}', [SubdistrictController::class, 'update'])->name('subdistrict.update');
Route::get('/subdistrict/details/{id}', [SubdistrictController::class, 'show'])->name('subdistrict.details');
Route::post('/subdistrict/delete/{id}', [SubdistrictController::class, 'destroy'])->name('subdistrict.delete');

Route::get('/village/create/{id}', [VillageController::class, 'create'])->name('village.create');
Route::post('/village/post/{id}', [VillageController::class, 'store'])->name('village.store');
Route::get('/village/{id}', [VillageController::class, 'index'])->name('village.data');
Route::get('/village/details/{id}', [VillageController::class, 'show'])->name('village.details');
Route::get('/village/edit/{id}', [VillageController::class, 'edit'])->name('village.edit');
Route::post('/village/update/{id}', [VillageController::class, 'update'])->name('village.update');
Route::post('/village/delete/{id}', [VillageController::class, 'destroy'])->name('village.delete');


Route::get('/neighbourhood/{id}', [NeighbourhoodController::class, 'index'])->name('neighbourhood.data');
Route::get('/neighbourhood/create/{id}', [NeighbourhoodController::class, 'create'])->name('neighbourhood.create');
Route::post('/neighbourhood/post/{id}', [NeighbourhoodController::class, 'store'])->name('neighbourhood.store');
Route::get('/neighbourhood/edit/{id}', [NeighbourhoodController::class, 'edit'])->name('neighbourhood.edit');
Route::post('/neighbourhood/update/{id}', [NeighbourhoodController::class, 'update'])->name('neighbourhood.update');
Route::post('/neighbourhood/delete/{id}', [NeighbourhoodController::class, 'destroy'])->name('neighbourhood.delete');
