<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use App\Repositories\Quote;
use App\Repositories\Items;
use App\Repositories\Categories;
use Carbon\Carbon;

class FrontController extends Controller
{
    private $specialItemIds = array(
        1 => [ 178, 179, 180, 181, 182, 183 ],
        2 => [ 190, 184 ],
        3 => [ 189, 184 ],
        4 => [ 191 ]
    );

    public function index() {
        $categories = Categories::with('items')->get();
        $items = Items::with('categories')->get();
        $email = 'napo.enterprise@gmail.com /<br> brandedfoodequipment@gmail.com';
        $specialItemIds = $this->specialItemIds;
        return view('front.home.index', compact('categories', 'items', 'email', 'specialItemIds'));
    }

    public function categoryItems($slug) {
        $categories = Categories::with('items')->get();
        $category = Categories::findBySlugOrFail($slug);
        $items = Items::with('categories')->get();
        $specialItemIds = $this->specialItemIds[$category->id];
        $categItems = $category
                        ->items()
                        ->orderBy('item_name', 'asc')
                        ->paginate(8);
        $specialItems = Items::findMany($specialItemIds);
        $email = 'napo.enterprise@gmail.com /<br> brandedfoodequipment@gmail.com';
        return view('front.category.index',  compact('categories', 'items', 'category', 'email', 'categItems', 'specialItems', 'specialItemIds'));
    }
    
    public function item($slug) {
        $categories = Categories::with('items')->get();
        $item = Items::findBySlugOrFail($slug);
        $items = Items::with('categories')->get();
        $email = 'napo.enterprise@gmail.com /<br> brandedfoodequipment@gmail.com';
        return view('front.item.index',  compact('categories', 'items', 'item', 'email'));
    }

    public function about() {
        $categories = Categories::with('items')->get();
        $items = Items::with('categories')->get();
        $email = 'napo.enterprise@gmail.com /<br> brandedfoodequipment@gmail.com';
        return view('front.about.index', compact('categories', 'items', 'email'));
    }

    public function contact() {
        $categories = Categories::with('items')->get();
        $items = Items::with('categories')->get();
        $email = 'napo.enterprise@gmail.com /<br> brandedfoodequipment@gmail.com';
        return view('front.contact.index', compact('categories', 'items', 'email'));
    }

    public function quote() {
        $categories = Categories::with('items')->get();
        $items = Items::with('categories')->get();
        $email = 'napo.enterprise@gmail.com /<br> brandedfoodequipment@gmail.com';
        return view('front.quote.index', compact('categories', 'items', 'email'));
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
            'request_message'   => $request->request_message,
            'archived'          => 0,
            'replied'           => 0
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
        $email = 'napo.enterprise@gmail.com /<br> brandedfoodequipment@gmail.com';
        return view('front.result.index', compact('categories', 'items', 'results', 'email'));
    }

    public function printer() {
        $categories = Categories::with('items')->get();
        $items = Items::with('categories')->get();
        $email = 'napo.enterprise@gmail.com /<br> brandedfoodequipment@gmail.com';
        return view('front.paper.index', compact('categories', 'items', 'email'));
    }
}
