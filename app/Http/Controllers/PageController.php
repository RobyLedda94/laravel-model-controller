<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



// classe PageController
class PageController extends Controller
{
    //creo la public function all'interno di PageController
    public function index(){
        $title = 'Homepage';
        $description = 'Prova controller';
        return view('home', compact('title', 'description'));
    }
}
