<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index() {
        return view('front.home.index');
    }

    public function about() {
        return view('front.home.index');
    }
}
