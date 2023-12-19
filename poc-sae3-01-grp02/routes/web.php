<?php

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

Route::get('/scene', [SceneController::class, 'scene'])->name('scene');

Route::get('/scene/filtered', [SceneController::class, 'filteredScenes'])->name('scene.filtered');

Route::get('/scene/recent', [SceneController::class, 'recentScenes'])->name('scene.recent');

Route::get('/home', function () {
    return view('home');
})->middleware(['auth'])->name('home');

Route::get('/test', function () {
    return view('test');
})->middleware(['auth'])->name('test');

Route::post('/profile/upload', [ProfilController::class, 'upload'])->name('profile.upload');

