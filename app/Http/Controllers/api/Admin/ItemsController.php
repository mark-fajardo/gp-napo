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
            'item_short_description' => 'required',
            'item_description' => 'required'
        ]);

        $bReturn = false;
        $oItems = new Items;
        $oItems->users_id = Auth::user()->get('id')[0]['id'];
        $oItems->item_name = $this->aRequest['item_name'];
        $oItems->item_brand = $this->aRequest['item_brand'];
        $oItems->item_qty = $this->aRequest['item_qty'];
        $oItems->item_short_description = $this->aRequest['item_short_description'];
        $oItems->item_description = $this->aRequest['item_description'];
        $sItemImg = '[';
        for ($i = 0; $i < $iFileLen; $i++) {
            $sItemImg .= '"' . Storage::putFile('photos/items', new File($this->aRequest['file_' . $i])) . '", ';
        }
        $sItemImg = rtrim($sItemImg, ", ");
        $sItemImg .= ']';
        $oItems->img_dir = $sItemImg;
        $bReturn = $oItems->save();
        $oItems->categories()->attach(explode(',', $this->aRequest['item_categs']));
        return response()->json($bReturn);
    }
    
    /**
     * Add new item
     * 
     * @return Boolean
     */
    public function update()
    {
        $iFileLen = $this->getFilesCount();
        $validatedData = $this->oRequest->validate([
            'item_name' => 'required|min:5',
            'item_brand' => 'required|min:5',
            'item_qty' => 'required',
        ]);

        $bReturn = false;
        $oItems = Items::find(intval($this->aRequest['item_id']));
        $oItems->users_id = Auth::user()->get('id')[0]['id'];
        $oItems->item_name = $this->aRequest['item_name'];
        $oItems->item_brand = $this->aRequest['item_brand'];
        $oItems->item_qty = $this->aRequest['item_qty'];
        if ($iFileLen > 0) {
            $sItemImg = '[';
            for ($i = 0; $i < $iFileLen; $i++) {
                $validatedData = $this->oRequest->validate([
                    'file_' . $i => 'required|image|max:5000'
                ]);
                $sItemImg .= '"' . Storage::putFile('photos/items', new File($this->aRequest['file_' . $i])) . '", ';
            }
            $sItemImg = rtrim($sItemImg, ", ");
            $sItemImg .= ']';
            $oItems->img_dir = $sItemImg;
        }
        $bReturn = $oItems->save();
        $oItems->categories()->sync(explode(',', $this->aRequest['item_categs']));
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
        $oItems = Items::with('categories')->where('archived', 0)->get();
        return response()->json($oItems);
    }

    /**
     * Archive row
     */
    public function archive()
    {
        $bReturn = false;
        foreach ($this->aRequest['id'] as $iId) {
            $aItems = Items::find($iId);
            $aItems->archived = 1;
            $bReturn = $aItems->save();
        }
        return response()->json($bReturn);
    }
    
    /**
     * Delete multiple items
     */
    public function delete() {
        $ids = $this->aRequest['id'];
        $response = false;

        try {
            foreach($ids as $id) {
                $item = Items::findOrFail($id);
                $item->delete();
            }
            $response  = true;
        } catch (Exception $e) {
            $response = false;
        }

        return response()->json(['result' => $response]);
    }
}
