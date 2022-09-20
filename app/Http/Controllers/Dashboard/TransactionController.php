<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;

class TransactionController extends Controller
{
    public function index()
    {
        return view('dashboard.transactions');
    }
}
