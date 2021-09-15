<?php

namespace App\Http\Controllers;

use App\Item;

class itemController extends Controller
{
    public function index()
    {
        $items = Item::orderBy('created_at', 'desc')->groupBy('item')->get(['item', 'amount', 'unit', 'created_at']);
        
        return view('items')->with('items', $items);
    }
}