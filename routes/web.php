<?php

use App\Http\Controllers\MotController;
use Illuminate\Support\Facades\Route;





Route::get("/",[MotController::class,'index'])->name('mots.index');
Route::get("/create",[MotController::class,'create'])->name('mots.create');
Route::post("/create",[MotController::class,'store'])->name('mots.store');
Route::post("/edit/{mot}",[MotController::class,'edit'])->name('mots.edit');
Route::DELETE("/mot/{mot}",[MotController::class,'destroy'])->name('mots.destroy');


