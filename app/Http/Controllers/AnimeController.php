<?php

namespace App\Http\Controllers;

use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AnimeController extends Controller
{
    public function animeIndex(){

        $endpoint = 'https://api.jikan.moe/v4/genres/anime';

        $result = Http::get($endpoint)['data'];

        return view('anime.genere', ['generi' => $result]);
    }

    public function animeById($id){
        $endpoint = 'https://api.jikan.moe/v4/anime';

        $result = Http::get($endpoint, ['generi' => $id])['data'];

        $resultMap = Arr::map($result, function($el){
            return [
                'img' => $el['images']['webp']['image_url'],
                'title' => $el['title'],
                'sinossi' => $el['synopsis'],
                'punteggio' => $el['score']
            ];
        });

        return view('anime/animeID', ['animes' => $resultMap]);
    }

    public function dettaglio($id){

        $endpoint = 'https://api.jikan.moe/v4/anime';

        $result = Http::get($endpoint, ['generi' => $id])['data'];

        $resultMap = Arr::map($result, function($el){
            return [
                'id' => $el['mal_id'],
                'img' => $el['images']['webp']['image_url'],
                'title' => $el['title'],
                'sinossi' => $el['synopsis'],
                'punteggio' => $el['score']
            ];
        });

        return view('anime/animeID/dettaglio', ['animes' => $resultMap]);
    }
}
