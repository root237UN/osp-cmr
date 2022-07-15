<?php

use App\Http\Controllers\SecondaryController;
use App\Http\Controllers\WebSiteController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EnseignementController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\OrientationController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EtablissementController;
use App\Http\Controllers\FormationController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [WebSiteController::class, 'index'])->name('welcome');
Route::get('/enseignement-secondaire-au-cameroun', [EnseignementController::class, 'index'])->name('enseignement');

Route::get('/enseignement-secondaire-au-cameroun/{code}', [EnseignementController::class, 'showTypeEnseignement'])->name('enseignement.view');
Route::get('enseignement/parcours/{code}', [EnseignementController::class, 'showParcours'])->name('parcours.show');

/** Route pour les formations */
Route::get('/formation-professionnelle', [FormationController::class, 'index'])->name('formation');
Route::get('/formation-professionnelle/{code}', [FormationController::class, 'showFormation'])->name('formation.show');
Route::get('/formation-description/{code}', [FormationController::class, 'InfosTypeFormation'])->name('formation.infos');
Route::get('/formation-professionnelle-presentation/{code}', [FormationController::class, 'presentationFormation'])->name('formation.all');
Route::get('/formation-professionnelle/presentation/{code}', [FormationController::class, 'detailsFormation'])->name('formation.details');

Route::get('/structrure/formation/{code}', [SecondaryController::class, 'presentationStructure'])->name('structure.formation');

Route::get('/insertion-professionnelle', [WebSiteController::class, 'showMenuStructure'])->name('structure');

/** Routes pour les sections et les filieres */
Route::get('enseignement/section/{code}', [EnseignementController::class, 'section'])->name('section');
Route::get('enseignement/filiere', [WebSiteController::class, 'filiere'])->name('filiere');
Route::get('enseignement/filiere/{code}', [WebSiteController::class, 'showFiliere'])->name('showFiliere');

/** Routes pour les etablissement proposant des parcours */
Route::get('/etablissement', [EtablissementController::class, 'index'])->name('etablissement');
Route::get('/etablissement/ecole-de-formation-professionnelle', [EtablissementController::class, 'ecolePro'])->name('ecolePro');
Route::get('/ecoles-visitor', [WebSiteController::class, 'showEcoleByRegion']);
Route::get('/ecoles', [WebSiteController::class, 'showEcole']);

Route::get('/contact', [WebSiteController::class, 'contact'])->name('contact');

// Routes orientation
Route::get('/orientation', [OrientationController::class, 'index'])->name('orientation');
Route::get('/search', [OrientationController::class, 'search'])->name('search');

Route::middleware(['middleware' => 'PreventBackHistory'])->group(function () {
    Auth::routes();
});

Route::group(['prefix' => 'admin', 'middleware' => ['isAdmin', 'auth', 'PreventBackHistory']], function () {
    Route::get('dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('ecole', [AdminController::class, 'ecole'])->name('admin.ecole');
    Route::get('structure', [AdminController::class, 'structure'])->name('admin.structure');
    Route::get('media', [MediaController::class, 'index'])->name('admin.media');
});
Route::group(['prefix' => 'user', 'middleware' => ['isUser', 'auth', 'PreventBackHistory']], function () {
    Route::get('dashboard', [UserController::class, 'index'])->name('user.dashboard');
    Route::get('profile', [UserController::class, 'profile'])->name('user.profile');
    Route::get('settings', [UserController::class, 'setting'])->name('user.settings');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
