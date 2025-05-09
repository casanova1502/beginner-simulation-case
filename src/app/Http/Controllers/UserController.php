<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Item;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function registerStore(Request $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        Auth::login($user);

        return redirect()->route('mypage_profile');
    }

    public function addProfilecreate()
    {
        return view('mypage_profile');
    }
    
    public function addProfilestore(Request $request)
    {
        $user = Auth::user();

        $user->name = $request->name;
        $user->post_code = $request->post_code;
        $user->address = $request->address;
        $user->building = $request->building;
        $user->save();

        return redirect('/');
    }

    public function loginCreate()
    {
        return view('auth.login');
    }

    public function loginStore(Request $request)
    {
        $user = $request->only(['email', 'password']);

        if (Auth::attempt($user)){
            
            return redirect('/');
        }

        return redirect()->back();
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/login');
    }

    public function addressEditcreate()
    {  
        $user = Auth::user();

        return view('purchase_address', compact('user'));
    }

    public function profileEditcreate()
    {
        $items = Item::all();
        $user = Auth::user();

        return view('mypage',compact('items','user'));
    }
}
