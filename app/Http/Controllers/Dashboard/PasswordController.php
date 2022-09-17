<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PasswordController extends Controller
{
    public function store(Request $request)
    {
        User::find(auth('api')->user()->id)->update([
            'password' => bcrypt($request->password),
        ]);

        return $this->showMessage('your password has been changed');
    }
}
