<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Transaction;
use App\Http\Controllers\Controller;

class TransactionController extends Controller
{
    public function index()
    {
        return view('dashboard.transactions')
            ->with('transactions',  Transaction::all())
            ->with('user',  auth()->user());
    }
}
