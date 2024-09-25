<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// importo il modello Movie
use App\Models\Movie;

class MovieController extends Controller
{
    public function index() {
        $title = 'Lista dei film';
        $description = 'Scegli i tuoi film preferiti';

        // richiamo la tabella del db
        $movies = Movie::all();
        dd($movies);

        return view('movies.index', compact('title', 'description'));
    }
}
