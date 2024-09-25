<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



// classe PageController
class PageController extends Controller
{
    //creo la public function all'interno di PageController
    public function index(){
        $title = 'Questa è la nostra Home Page';
        $description = 'Scegli i tuoi film preferiti';
        return view('home', compact('title', 'description'));
    }
}
