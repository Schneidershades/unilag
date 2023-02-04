<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function login(Request $request)
    {
        $login = auth()->attempt($request->only('email', 'password'));

        if(!$login){
            Session::flash('error', 'wrong email or password');
            return redirect()->back();
        }

        return view('dashboard.home')->with('user',  auth()->user());
    }

    public function register(Request $request)
    {
        User::create([
            'identifier' => rand(10000, 90000),
            'email' => $request['email'],
            'password' => bcrypt($request['password'])
        ]);

        $login = auth()->attempt($request->only('email', 'password'));

        if($login){
            return view('dashboard.home');
        }
    }
}
