<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;


class MovieController extends Controller
{
    // per leggere
    public function index() {
        // ciò che fa riprendere tutto da MOVIES
        $moviesArray = Movie::all();
        // dd("$moviesArray");
        
        return view("Home", compact("moviesArray"));
    }
    
    // public function index2() {
    //     // ciò che fa riprendere tutto da MOVIES
    //     $moviesArray = Movie::all();
    //     return view("Prima", compact("moviesArray"));
    // }
    // show -> vedi cosa fa
}

// function () {
//     return view('home');
// }