<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Model\User;
use Illuminate\Support\Facades\Hash;

class RegisteredUserController extends Controller
{
    // public function create(Request $request)
    // {
    //     return view('register')
    // }
    
    // public function store(Request $request)
    // {
    //     $user = $request->only(['name', 'email', 'password', 'password_confirmation']);
    
    //     return view('index', compact('user'));
    // }
}
