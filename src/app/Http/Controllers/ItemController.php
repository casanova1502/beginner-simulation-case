<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use Illuminate\Support\Facades\Auth;

class ItemController extends Controller
{
    public function index()
    {
        $items = Item::all();
        
        return view('index', compact('items'));
    }

    public function show($id)
    {
        $item = Item::find($id);

        return view('item', compact('item'));
    }

    public function buy($id)
    {
        $item = Item::find($id);
        $user = Auth::user();
        
        return view('purchase', compact('item', 'user'));
    }

}