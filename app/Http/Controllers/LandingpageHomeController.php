<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingpageHomeController extends Controller
{
    public function index() {
        return view("index");
    }
}
