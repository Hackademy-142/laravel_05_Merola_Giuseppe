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
                'id' => $el['mal_id'],
                'img' => $el['images']['webp']['image_url'],
                'title' => $el['title'],
                'sinossi' => $el['synopsis'],
                'punteggio' => $el['score']
            ];
        });

        return view('anime/animeID', ['animes' => $resultMap]);
    }


    function dettaglio($id)
    {
        $result = "https://api.jikan.moe/v4/anime";

        $response = Http::get($result)["data"];

        $animeData = collect($response)->firstWhere('mal_id', $id);

        if ($animeData) {
            $anime = [
                "img" => $animeData["images"]["webp"]["image_url"],
                "title" => $animeData["title"],
                "sinossi" => $animeData["synopsis"],
                "punteggio" => $animeData["score"],
                "id" => $animeData["mal_id"],
            ];

            return view("anime/dettaglio", ["anime" => $anime]);
        }
    }

}

