<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use App\Repositories\Quote;

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

    public function addQuote(Request $request) {
        $validator = Validator::make($request->all(),[
            'first_name'        => 'required|max:255',
            'last_name'         => 'required|max:255',
            'email'             => 'required|email|max:255',
            'phone'             => 'required',
            'request_message'   => 'required'
        ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator);
        }

        $quote = Quote::create([
            'first_name'        => $request->first_name,
            'last_name'         => $request->last_name,
            'email'             => $request->email,
            'phone'             => $request->phone,
            'request_message'   => $request->request_message
        ]);

        return redirect()->route('front.quote')->with('success', 'Your quote request has sucessfully created. GP-NAPO Team will contact you as soon as possible. Thank You!');
    }

}
