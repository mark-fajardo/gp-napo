<?php

namespace App\Http\Controllers\api\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Items;
use Auth;

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

        $bReturn = $oItems->save();
        return response()->json($bReturn);
    }

    /**
     * Load items
     * 
     * @return Object
     */
    public function load()
    {
        $oItems = Items::all();
        return response()->json($oItems);
    }
}
