<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;

class PageController extends Controller
{
    public function index(){
        $films = Movie::all();

        // dd($films);
        return view('home', ["films" => $films]) ;
    }
}