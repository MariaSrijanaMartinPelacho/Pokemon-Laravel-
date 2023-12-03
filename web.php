<?php

use App\Http\Controllers\PokemonController;
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
    return view('IndexView');
});
Route:: post ('/create', [PokemonController::class, 'store'])-> name('Pokemon.store');

Route:: get ('/show', [PokemonController::class, 'show'])->name('Pokemon.show');

