<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use App\Repositories\Quote;
use App\Repositories\Items;
use App\Repositories\Categories;

class FrontController extends Controller
{

    public function index() {
        $categories = Categories::with('items')->get();
        $items = Items::with('categories')->get();
        foreach ($categories as $cat) {
            // echo json_encode($cat->items);
        }
        return view('front.home.index', compact('categories', 'items'));
    }

    public function categoryItems($slug) {
        $categories = Categories::with('items')->get();
        $category = Categories::findBySlugOrFail($slug);
        $items = Items::with('categories')->get();
        return view('front.category.index',  compact('categories', 'items', 'category'));
    }
    
    public function item($slug) {
        $categories = Categories::with('items')->get();
        $item = Items::findBySlugOrFail($slug);
        $items = Items::with('categories')->get();
        return view('front.item.index',  compact('categories', 'items', 'item'));
    }

    public function about() {
        $categories = Categories::with('items')->get();
        $items = Items::with('categories')->get();
        return view('front.about.index', compact('categories', 'items'));
    }

    public function contact() {
        $categories = Categories::with('items')->get();
        $items = Items::with('categories')->get();
        return view('front.contact.index', compact('categories', 'items'));
    }

    public function quote() {
        $categories = Categories::with('items')->get();
        $items = Items::with('categories')->get();
        return view('front.quote.index', compact('categories', 'items'));
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

    public function searchItems() {
        $query = request('q');
        $results = Items::where('item_name', 'like', '%'.$query.'%')
                        ->orWhere('item_brand', 'like', '%'.$query.'%')
                        ->get();
        
        $categories = Categories::with('items')->get();
        $items = Items::with('categories')->get();
        return view('front.result.index', compact('categories', 'items', 'results'));
    }

    public function printer() {
        $categories = Categories::with('items')->get();
        $items = Items::with('categories')->get();
        return view('front.paper.index', compact('categories', 'items'));
    }
}
