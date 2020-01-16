<?php

namespace App\Http\Controllers\api\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Items;
use Auth;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;

class ItemsController extends Controller
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
        $iFileLen = $this->getFilesCount();
        $validatedData = $this->oRequest->validate([
            'item_name' => 'required|min:5',
            'item_brand' => 'required|min:5',
            'item_qty' => 'required',
        ]);

        $bReturn = false;
        $oItems = new Items;
        $oItems->users_id = Auth::user()->get('id')[0]['id'];
        $oItems->item_name = $this->aRequest['item_name'];
        $oItems->item_brand = $this->aRequest['item_brand'];
        $oItems->item_qty = $this->aRequest['item_qty'];
        $sItemImg = '[';
        for ($i = 0; $i < $iFileLen; $i++) {
            $sItemImg .= Storage::putFile('photos/items', new File($this->aRequest['file_' . $i]));
        }

        $sItemImg = ']';
        $oItems->img_dir = $sItemImg;
        $bReturn = $oItems->save();
        $oItems->categories()->attach(explode(',', $this->aRequest['item_categs']));
        return response()->json($bReturn);
    }

    /**
     * Get all files count
     * 
     * @return int
     */
    private function getFilesCount()
    {   
        $iFileLen = 0;
        foreach ($this->aRequest as $sKey => $mValue) {
            if (substr($sKey, 0, 5) === 'file_') {
                $iFileLen++;
            }
        }
        return $iFileLen;
    }

    /**
     * Load items
     * 
     * @return Object
     */
    public function load()
    {
        $oItems = Items::with('categories')->get();
        return response()->json($oItems);
    }
}
