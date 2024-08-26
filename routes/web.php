<?php

use App\Http\Controllers\CardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/cards/edit/{id}',[CardController::class,'edit'])->name('cards.edit');
Route::post('/cards/edit/{id}',[CardController::class,'update'])->name('cards.update');
Route::get('/cards/delete/{id}',[CardController::class,'destroy'])->name('cards.destroy');
Route::get('/cards',[CardController::class,'index'])->name('cards.index');
Route::get('/cards/create',[CardController::class,'create'])->name('cards.create');
Route::post('/cards',[CardController::class,'store'])->name('cards.store');
Route::get('/cards',[CardController::class,'show'])->name('cards.show');

