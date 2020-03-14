<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Repositories\Items;

class HomeController extends Controller
{
    
    public function index() 
    {
        // $oItems = Items::where('updated_at', '>', Carbon::now()->subMonths(12))->groupBy('updated_at')->get();
        $oItems = Items::selectRaw('SUM(`views`)')
        ->where('updated_at', '>', Carbon::now()->subMonths(12))->groupBy('updated_at')
        ->groupBy()
        ->get();
        dd($oItems);
        return view('admin.home.index');
    }

    public function auth()
    {
        return view('auth.login');
    }
}
