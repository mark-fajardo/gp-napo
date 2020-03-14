<?php

namespace App\Http\Controllers\api\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Quote;

class QuotesController extends Controller
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
     * Load items
     * 
     * @return Object
     */
    public function load()
    {
        $oQuotes = Quote::all();
        return response()->json($oQuotes);
    }

    /**
     * Archive row
     */
    public function archive()
    {
        $bReturn = false;
        foreach ($this->aRequest['id'] as $iId) {
            $aQuote = Quote::find($iId);
            $aQuote->archived = 1;
            $bReturn = $aQuote->save();
        }
        return response()->json($bReturn);
    }

    /**
     * Mark as responded
     */
    public function replied()
    {
        $bReturn = false;
        foreach ($this->aRequest['id'] as $iId) {
            $aQuote = Quote::find($iId);
            $aQuote->replied = 1;
            $bReturn = $aQuote->save();
        }
        return response()->json($bReturn);
    }
}
