<?php

use App\Http\Controllers\SecondaryController;
use App\Http\Controllers\WebSiteController;
use Illuminate\Support\Facades\Route;

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
Route::get('/orientation', [WebSiteController::class, 'orientation'])->name('orientation');

Route::get('/orientation/{code}', [WebSiteController::class, 'showTypeEnseignement'])->name('orientation.show');
Route::get('/parcours/{code}', [WebSiteController::class, 'showParcours'])->name('parcours.show');

/** Route pour les formations */
Route::get('/formation', [WebSiteController::class, 'formation'])->name('formation');
Route::get('/formation/{code}', [WebSiteController::class, 'showFormation'])->name('formation.show');
Route::get('/formation-description/{code}', [WebSiteController::class, 'InfosTypeFormation'])->name('formation.infos');
Route::get('/formation-presentation/{code}', [WebSiteController::class, 'presentationFormation'])->name('formation.all');
Route::get('/presentationdelaformation/{code}', [WebSiteController::class, 'detailsFormation'])->name('formation.details');

Route::get('/structrure/formation/{code}', [SecondaryController::class, 'presentationStructure'])->name('structure.formation');

Route::get('/structure', [WebSiteController::class, 'structure'])->name('structure');
/** Routes pour les sections et les filieres */
Route::get('/section/{code}',[WebSiteController::class, 'section'])->name('section');
Route::post('/filiere',[WebSiteController::class, 'filiere'])->name('filiere');
Route::get('/filiere/{code}',[WebSiteController::class, 'showFiliere'])->name('showFiliere');

/** Routes pour les etablissement proposant des parcours */
Route::get('/etablissement', [WebSiteController::class, 'etablissement'])->name('etablissement');
Route::get('/contact', [WebSiteController::class, 'contact'])->name('contact');

Route::get('/enseignement', [WebSiteController::class, 'enseignement'])->name('enseignement');

/** Routes pour les pages en developpement */

Route::get('/dev', [WebSiteController::class, 'dev'])->name('dev');

Auth::routes();

Route::group(['prefix' => 'admin', 'middleware'=>['isAdmin','auth']],function(){
    Route::get('dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('profile', [AdminController::class, 'profile'])->name('admin.profile');
    Route::get('settings', [AdminController::class, 'setting'])->name('admin.settings');
});
Route::group(['prefix' => 'user', 'middleware'=>['isUser', 'auth']],function(){
    Route::get('dashboard', [UserController::class, 'index'])->name('user.dashboard');
    Route::get('profile', [UserController::class, 'profile'])->name('user.profile');
    Route::get('settings', [UserController::class, 'setting'])->name('user.settings');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
