<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



// classe PageController
class PageController extends Controller
{
    //creo la public function all'interno di PageController per la homepage
    public function home(){
        $title = 'Questa è la nostra Home Page';
        $description = 'Scegli i tuoi film preferiti';
        return view('home', compact('title', 'description'));
    }

    // public function di PageController per i contatti
    public function contacts(){
        $title = 'I nostri contatti';
        $description = 'Non ti interessa';
        return view('contacts', compact('title', 'description'));
    }

}
