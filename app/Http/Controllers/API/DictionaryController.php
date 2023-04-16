<?php

namespace App\Http\Controllers\API;

use App\Models\Dictionary;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DictionaryController extends Controller
{
    //
    public function getAllData(Request $request)
    {
        $dictionary = Dictionary::select('id','name', 'meaning')->get();

        return response()->json([
            'data' => $dictionary
        ]);
    }

    public function getMeaning(Request $request)
    {
        // $dictionary = Dictionary::select('meaning')->where('id', $request->id)->where('name', $request->name)->get();
        $dictionary = Dictionary::select('meaning')->where('id', $request->id)->get();
        return response()->json($dictionary);
    }

    public function getBData(Request $request)
    {
        $aData = Dictionary::select('name', 'meaning')->where('name', 'like', 'B%')->get();
        return response()->json($aData);
    }

    public function getCData(Request $request)
    {
        $aData = Dictionary::select('name', 'meaning')->where('name', 'like', 'C%')->get();
        return response()->json($aData);
    }

    public function geDData(Request $request)
    {
        $aData = Dictionary::select('name', 'meaning')->where('name', 'like', 'D%')->get();
        return response()->json($aData);
    }

    public function getEData(Request $request)
    {
        $aData = Dictionary::select('name', 'meaning')->where('name', 'like', 'E%')->get();
        return response()->json($aData);
    }

    public function getFData(Request $request)
    {
        $aData = Dictionary::select('name', 'meaning')->where('name', 'like', 'F%')->get();
        return response()->json($aData);
    }

    public function getGData(Request $request)
    {
        $aData = Dictionary::select('name', 'meaning')->where('name', 'like', 'G%')->get();
        return response()->json($aData);
    }

    public function getHData(Request $request)
    {
        $aData = Dictionary::select('name', 'meaning')->where('name', 'like', 'H%')->get();
        return response()->json($aData);
    }

    public function getIData(Request $request)
    {
        $aData = Dictionary::select('name', 'meaning')->where('name', 'like', 'I%')->get();
        return response()->json($aData);
    }

    public function getJData(Request $request)
    {
        $aData = Dictionary::select('name', 'meaning')->where('name', 'like', 'J%')->get();
        return response()->json($aData);
    }

    public function getKData(Request $request)
    {
        $aData = Dictionary::select('name', 'meaning')->where('name', 'like', 'K%')->get();
        return response()->json($aData);
    }

    public function getLData(Request $request)
    {
        $aData = Dictionary::select('name', 'meaning')->where('name', 'like', 'L%')->get();
        return response()->json($aData);
    }

    public function getMData(Request $request)
    {
        $aData = Dictionary::select('name', 'meaning')->where('name', 'like', 'M%')->get();
        return response()->json($aData);
    }

    public function getNData(Request $request)
    {
        $aData = Dictionary::select('name', 'meaning')->where('name', 'like', 'N%')->get();
        return response()->json($aData);
    }

    public function getOData(Request $request)
    {
        $aData = Dictionary::select('name', 'meaning')->where('name', 'like', 'O%')->get();
        return response()->json($aData);
    }

    public function getPData(Request $request)
    {
        $aData = Dictionary::select('name', 'meaning')->where('name', 'like', 'P%')->get();
        return response()->json($aData);
    }

    public function getQData(Request $request)
    {
        $aData = Dictionary::select('name', 'meaning')->where('name', 'like', 'Q%')->get();
        return response()->json($aData);
    }

    public function getRData(Request $request)
    {
        $aData = Dictionary::select('name', 'meaning')->where('name', 'like', 'R%')->get();
        return response()->json($aData);
    }

    public function getSData(Request $request)
    {
        $aData = Dictionary::select('name', 'meaning')->where('name', 'like', 'S%')->get();
        return response()->json($aData);
    }

    public function getTData(Request $request)
    {
        $aData = Dictionary::select('name', 'meaning')->where('name', 'like', 'T%')->get();
        return response()->json($aData);
    }

    public function getUData(Request $request)
    {
        $aData = Dictionary::select('name', 'meaning')->where('name', 'like', 'U%')->get();
        return response()->json($aData);
    }

    public function getYData(Request $request)
    {
        $aData = Dictionary::select('name', 'meaning')->where('name', 'like', 'Y%')->get();
        return response()->json($aData);
    }

}
