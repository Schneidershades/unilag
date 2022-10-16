<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Payment;

class PaymentController extends Controller
{
    public function index()
    {
        return view('dashboard.payments')->with('payments',  Payment::all());
    }
}
