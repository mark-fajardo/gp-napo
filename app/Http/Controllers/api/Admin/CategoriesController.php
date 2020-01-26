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
     * Add new category
     * 
     * @return Boolean
     */
    public function add()
    {
        $validatedData = $this->oRequest->validate([
            'category_name' => 'required',
            'category_desc' => 'required',
            'category_icon' => 'required',
            'category_img' => 'required|image|max:5000',
        ]);

        $bReturn = false;
        $oCategories = new Categories;
        $oCategories->name = $this->aRequest['category_name'];
        $oCategories->description = $this->aRequest['category_desc'];
        $oCategories->icon = $this->aRequest['category_icon'];
        $oCategories->img_dir = Storage::putFile('public/photos/categories', new File($this->aRequest['category_img']));
        $bReturn = $oCategories->save();
        return response()->json($bReturn);
    }
    
    /**
     * Update category
     * 
     * @return Boolean
     */
    public function update()
    {
        $validatedData = $this->oRequest->validate([
            'category_name' => 'required',
            'category_desc' => 'required',
            'category_icon' => 'required',
        ]);

        $bReturn = false;
        $oCategories = Categories::find($this->aRequest['category_id']);
        $oCategories->name = $this->aRequest['category_name'];
        $oCategories->description = $this->aRequest['category_desc'];
        $oCategories->icon = $this->aRequest['category_icon'];
        if (isset($this->aRequest['category_img']) === true) {
            
            $validatedData = $this->oRequest->validate([
                'category_img' => 'required|image|max:5000'
            ]);
            $oCategories->img_dir = Storage::putFile('public/photos/categories', new File($this->aRequest['category_img']));
        }
        $bReturn = $oCategories->save();
        return response()->json($bReturn);
    }

    /**
     * Archive row
     */
    public function archive()
    {
        $bReturn = false;
        foreach ($this->aRequest['id'] as $iId) {
            $aCateg = Categories::find($iId);
            $aCateg->archived = 1;
            $bReturn = $aCateg->save();
        }
        return response()->json($bReturn);
    }

    /**
     * Load items
     * 
     * @return Object
     */
    public function load()
    {
        $oCategories = Categories::with('items')->where('archived', 0)->get();
        return response()->json($oCategories);
    }

    /**
     * Load items
     * 
     * @return Object
     */
    public function loadArchived()
    {
        $oCategories = Categories::with('items')->where('archived', 1)->get();
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
