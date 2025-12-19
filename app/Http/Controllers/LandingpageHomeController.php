<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class LandingpageHomeController extends Controller
{
    public function index()
    {
        return view("index");
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
}
