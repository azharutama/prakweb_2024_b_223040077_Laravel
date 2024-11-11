<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

use function Laravel\Prompts\password;
use Illuminate\Routing\Controller;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'register',


        ]);
    }

    public function store(Request $request)
    {


        $data = $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|min:5|max:20|unique:users',
            'email' => 'required|email:dns|',
            'password' => 'required|min:6|max:100',
        ]);
        $data['password'] = Hash::make($data['password']);



        User::create($data);



        return redirect('/login')->with('success', 'Registration successful!');
    }
}
