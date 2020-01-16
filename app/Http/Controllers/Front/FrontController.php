<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Items;

class FrontController extends Controller
{
    public function index() {
        return view('front.home.index');
    }

    public function searchItems() {
        $query = request('q');
        $items = Items::where('item_name', 'like', '%'.$query.'%')
                        ->orWhere('item_brand', 'like', '%'.$query.'%')
                        ->get();
        
        return response()->json($items);
    }
}
