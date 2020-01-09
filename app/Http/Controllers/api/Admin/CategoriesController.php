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
    public $oRequest;
    
    /**
     * Request Array
     * 
     * @var
     */
    public $aRequest;

    public function __construct(Request $aRequest)
    {
        $this->oRequest = $aRequest;
        $this->aRequest = $aRequest->all();
    }
    
    /**
     * Add new item
     * 
     * @return Boolean
     */
    public function add()
    {
        $validatedData = $this->oRequest->validate([
            'category_name' => 'required|min:5',
        ]);

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
