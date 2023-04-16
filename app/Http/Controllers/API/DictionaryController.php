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
}
