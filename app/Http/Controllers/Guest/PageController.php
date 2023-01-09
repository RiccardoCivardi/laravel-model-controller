<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return view('home');
    }

    public function movies() {

        $movies = Movie::all();

        // dd($movies);

        return view('movies', compact('movies'));
    }

    public function detail($id) {

        // dd($id);

        $movie = Movie::find($id);

        if(is_null($movie)){
            abort(404, 'film non presente del database');
        }

        return view('detail', compact('movie'));
    }

    public function about() {
        return view('about');
    }
}
