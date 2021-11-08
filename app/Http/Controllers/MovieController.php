<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        //SELECT * FROM `movies`, $movies - nome di DB, Movie - nome del model che abbiamo creato
        $movies = Movie::all();
        // dd($movies);
        return view('index', compact('movies'));
    }
}
