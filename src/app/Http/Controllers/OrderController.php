<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function store(Request $request, $id)
    {
        $user = Auth::user();

        $order = Order::create([
            'item_id' => $id,
            'user_id' => $user->id,
            'pay_way_id' => $request->payway,
        ]);
        
        return redirect('/');
    }
}
