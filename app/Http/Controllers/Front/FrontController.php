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
        return view('front.about.index');
    }

    public function contact() {
        return view('front.contact.index');
    }

    public function quote() {
        return view('front.quote.index');
    }
}
