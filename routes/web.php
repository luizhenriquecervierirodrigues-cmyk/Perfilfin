<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EtapaController;
use App\Http\Controllers\HomeController;

Route::get('/', [AuthController::class, 'index'])
    ->name('login')
    ->middleware('guest');

Route::get('/home', [HomeController::class, 'index'])->name('index');

Route::controller(AuthController::class)->group(function () {
    Route::get('/login', 'index')->name('login')->middleware('guest');
    Route::post('/login', 'login')->name('auth.login')->middleware('guest');

    Route::get('/register', 'register')->name('register')->middleware('guest');
    Route::post('/register', 'createUser')->name('auth.register')->middleware('guest');

    Route::post('/logout', 'logout')->name('logout')->middleware('auth');
});

Route::get('/etapas/etapa{numero}', [EtapaController::class, 'show'])->name('etapas.show');
Route::post('/etapas/etapa{numero}', [EtapaController::class, 'store'])->name('etapas.store');

Route::get('/resultado', [EtapaController::class, 'resultado'])->name('resultado');

Route::view('/sobre', 'sobre')->name('sobre');
Route::view('/ajuda', 'ajuda')->name('ajuda');
Route::view('/contato', 'contato')->name('contato');

