<?php

namespace App\Http\Controllers\api\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Categories;

class CategoriesController extends Controller
{
    /**
     * Request
     * 
     * @var
     */
    public $aRequest;

    public function __construct(Request $aRequest)
    {
        $this->aRequest = $aRequest->all();
    }
    
    /**
     * Add new item
     * 
     * @return Boolean
     */
    public function add()
    {
        $bReturn = false;
        $oCategories = new Categories;
        $oCategories->name = $this->aRequest['category_name'];
        
        $bReturn = $oCategories->save();
        return response()->json($bReturn);
    }

    /**
     * Load items
     * 
     * @return Object
     */
    public function load()
    {
        $oCategories = Categories::all();
        return response()->json($oCategories);
    }
}
