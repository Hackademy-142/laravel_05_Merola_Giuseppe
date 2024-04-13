<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimeController;
use App\Http\Controllers\MangaController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ProdottiController;

Route::get('/', [PublicController::class , 'homepage'])->name('welcome');

Route::get('prodotti', [ProdottiController::class , 'prodotti'])->name('prodotti');

Route::get('anime/genere', [AnimeController::class , 'animeIndex'])->name('animeGen');

Route::get('manga/genere', [MangaController::class , 'mangaIndex'])->name('mangaGen');

Route::get('anime/animeID/{id}', [AnimeController::class, 'animeById'])->name('animeID');

Route::get('manga/mangaID/{id}', [MangaController::class, 'mangaById'])->name('mangaID');

Route::get("anime/dettaglio/{id}",[AnimeController::class,"dettaglio"])->name("animeDettaglio");

