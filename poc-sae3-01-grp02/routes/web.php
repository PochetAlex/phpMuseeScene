<?php


use App\Http\Controllers\ProfilController;
use App\Http\Controllers\SceneController;
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

Route::get('/', function () {
    return view('accueil');
});

Route::get('/accueil', [SceneController::class, 'scene'])->name('scene');

Route::get('/accueil/filtered', [SceneController::class, 'filteredScenes'])->name('scene.filtered');

Route::get('/accueil/recent', [SceneController::class, 'recentScenes'])->name('scene.recent');

Route::get('/accueil/rating', [SceneController::class, 'sceneRating'])->name('scene.rating');

Route::get('/sceneDetail', [SceneController::class, 'sceneDetail'])->name('sceneDetail');

Route::get('/', function () {
    return view('accueil');
})->middleware(['auth'])->name('accueil');

Route::get('/personne', function () {
    return view('personne');
})->middleware(['auth'])->name('personne');

Route::post('/profile/upload', [ProfilController::class, 'upload'])->name('profile.upload');

Route::GET('/personne/show', [ProfilController::class, 'show'])->name('personne.show');


Route::get('/', function () {
    return view('accueil');
})->name('accueil');

Route::get('/apropos', function () {
    return view('apropos');
})->name('apropos');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/formulaire', function () {
    return view('formulaire');
})->name('formulaire');
