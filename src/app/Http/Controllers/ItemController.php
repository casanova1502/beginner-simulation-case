<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\User;
use App\Models\Comment;
use App\Models\PayWay;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class ItemController extends Controller
{
    public function index()
    {
        $items = Item::all();
        
        return view('index', compact('items'));
    }

    public function sell()
    {
        $user = Auth::user();
        $categories = Category::all();
        
        return view('sell', compact('user', 'categories'));
    }

    public function sellCreate(Request $request)
    {
        $user = Auth::user();

        
        return view('sell');
    }

    public function show($id)
    {
        $item = Item::find($id);
        $comments = Comment::with('user')->where('item_id', $id)->get();

        return view('item', compact('item','comments'));
    }

    public function buy($id)
    {
        $item = Item::findOrFail($id);
        $user = Auth::user();
        $payways = PayWay::all();
        
        return view('purchase', compact('item', 'user', 'payways'));
    }

}