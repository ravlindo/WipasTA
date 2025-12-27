<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Gallery;
use Illuminate\Http\Request;

class LandingpageHomeController extends Controller
{
    public function index()
    {
        $about = About::first();
        $galleries = Gallery::limit(6)->get(); // Get first 6 galleries for homepage
        return view("index", compact('about', 'galleries'));
    }
    public function testimoni()
    {
        return view("testimoni");
    }
    public function login()
    {
        return view("login");
    }
    public function register()
    {
        return view("register");
    }
    public function about()
    {
        $about = About::first();
        return view("about", compact('about'));
    }

    public function galeri()
    {
        $galleries = Gallery::all();
        return view("Galery", compact('galleries'));
    }
}
