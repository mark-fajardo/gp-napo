<?php

namespace App\Http\Controllers\api\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Categories;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;

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
            'category_desc' => 'required|min:5',
            'category_img' => 'required|image|max:5000',
        ]);

        $bReturn = false;
        $oCategories = new Categories;
        $oCategories->name = $this->aRequest['category_name'];
        $oCategories->description = $this->aRequest['category_desc'];
        $oCategories->img_dir = Storage::putFile('photos/categories', new File($this->aRequest['category_img']));
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

    /**
     * Delete multiple items
     */
    public function delete() {
        $ids = $this->aRequest['id'];
        $response = false;

        try {
            foreach($ids as $id) {
                $item = Categories::findOrFail($id);
                $item->delete();
            }
            $response  = true;
        } catch (Exception $e) {
            $response = false;
        }

        return response()->json(['result' => $response]);
    }
}
