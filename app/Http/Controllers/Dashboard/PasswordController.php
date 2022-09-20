<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\User;
use Illuminate\Http\Request;
use App\Rules\CurrentPassword;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\ChangePasswordFormRequest;

class PasswordController extends Controller
{
    public function index()
    {
        return view('dashboard.changepassword');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [    
            'current_password' => ['required', new CurrentPassword()],
            'password' => 'required|string|min:8',
        ]);
        
        $temp = $validator->errors()->all();

        if ($validator->fails()) {
            return redirect()->back()->with('danger', $temp[0]);            
        }

        User::find(auth()->user()->id)->update([
            'password' => bcrypt($request->password),
        ]);
        
        return redirect()->back()->with('success', 'Password changed successfully');
    }
}
