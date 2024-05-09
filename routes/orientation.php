<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\OSPController;

Route::prefix('orientation')->name('orientation.')->group(function(){
    Route::middleware(['guest:web'])->group(function(){
        Route::get('/metier', [OSPController::class,'metier'])->name('metier');
        Route::get('/ecole', [OSPController::class,'ecole'])->name('ecole');
        Route::get('/formation', [OSPController::class,'formation'])->name('formation');
        Route::get('/path_1', [OSPController::class,'path_1'])->name('path1');
        Route::get('/path_2', [OSPController::class,'path_2'])->name('path_2');


        Route::get('/path_1/parcours/{code}', [OSPController::class,'parcours'])->name('path1.parcours');
        Route::get('/path_1/option/{code}/', [OSPController::class,'options'])->name('path1.options');
        Route::get('/path_1/end/{libelle}/', [OSPController::class,'orientation'])->name('path1.end');

        Route::get('/trace', [OSPController::class,'trace'])->name('path1.trace');
        Route::post('/traceComplet', [OSPController::class,'traceComplet'])->name('path1.traceComplet');
    });
});
