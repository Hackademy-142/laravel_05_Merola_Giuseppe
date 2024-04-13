<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
    public function mangaGen(){
        $endpoint = Http::get('https://api.jikan.moe/v4/genres/manga')['data'];

        return response($endpoint);
    }
}
