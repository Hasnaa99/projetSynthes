<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\GroupeController;
use Illuminate\Support\Facades\Route;

//Route de la page acceuil
Route::get('/',[GroupeController::class,'index'])->name('acceuil')->middleware('auth');

//Route de connexion
Route::middleware('guest')->group(function(){
    Route::get('/login', [AuthController::class, 'show'])->name('login.show');
    Route::post('/login', [AuthController::class, 'login'])->name('login');
});
//Route de déconnexion
Route::get('/logout',[AuthController::class,'logout'])->middleware('auth');