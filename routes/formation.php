<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OSPController;
use App\Http\Controllers\FormationController;

Route::prefix('formation')->name('formation.')->group(function () {
    Route::middleware(['guest:web'])->group(function () {
        /** Route pour les formations */
        Route::get('/formation-professionnelle', [FormationController::class, 'index'])->name('formation');
        Route::get('/formation-professionnelle/{code}', [FormationController::class, 'showFormation'])->name('formation.show');
        Route::get('/formation-description/{code}', [FormationController::class, 'InfosTypeFormation'])->name('formation.infos');
        Route::get('/formation-professionnelle-presentation/{code}', [FormationController::class, 'presentationFormation'])->name('formation.all');
        Route::get('/formation-professionnelle/presentation/{code}', [FormationController::class, 'detailsFormation'])->name('formation.details');
    });
});
