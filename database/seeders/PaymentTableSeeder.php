<?php

namespace Database\Seeders;

use App\Models\Payment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaymentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Payment::create([
            'title' => 'Payment for November',
            'details' => 'Payment for November',
            'subtotal' => 3000,
            'charges' => 50,
            'total' => 3050,
            'period' => '2022-11-01',
            'public' => true,
        ]);
    }
}
