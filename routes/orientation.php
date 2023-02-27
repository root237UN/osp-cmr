<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\OSPController;

Route::prefix('orientation')->name('orientation.')->group(function(){
    Route::middleware(['guest:web'])->group(function(){
        Route::get('/metier', [OSPController::class,'metier'])->name('metier');
        Route::get('/ecole', [OSPController::class,'ecole'])->name('ecole');
        Route::get('/formation', [OSPController::class,'formation'])->name('formation');
    });
});
