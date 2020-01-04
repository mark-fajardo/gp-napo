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
    public $aRequest;

    public function __construct(Request $aRequest)
    {
        $this->aRequest = $aRequest->all();
    }
    
    /**
     * Add new item
     * 
     * @return Object
     */
    public function add()
    {
        $bReturn = false;
        $oItems = new Items;
        $oItems->users_id = Auth::user()->get('id')[0]['id'];
        $oItems->item_name = $this->aRequest['item_name'];
        $oItems->item_brand = $this->aRequest['item_brand'];
        $oItems->item_qty = $this->aRequest['item_qty'];
        
        $bReturn = $oItems->save();
        return response()->json($bReturn);
    }
}
