<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ProdottiController extends Controller
{
    public function prodotti(){
        return view('prodotti');
    }


}
