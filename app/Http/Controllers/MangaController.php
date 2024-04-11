<?php

namespace App\Http\Controllers;

use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MangaController extends Controller
{
    public function mangaIndex(){

        $endpoint = 'https://api.jikan.moe/v4/genres/manga';

        $result = Http::get($endpoint)['data'];

        return view('manga.genere', ['generi' => $result]);
    }

    public function mangaById($id){
        $endpoint = 'https://api.jikan.moe/v4/manga';

        $result = Http::get($endpoint, ['generi' => $id])['data'];

        $resultMap = Arr::map($result, function($el){
            return [
                'img' => $el['images']['webp']['image_url'],
                'title' => $el['title'],
                'sinossi' => $el['synopsis'],
                'punteggio' => $el['score']
            ];
        });

        return view('manga/mangaID', ['mangas' => $resultMap]);
    }
}
