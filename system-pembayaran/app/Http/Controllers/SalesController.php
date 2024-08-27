<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sale;
use Illuminate\Routing\Controller;

class SalesController extends Controller
{
    public function calculateCommission(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'amount' => 'required|numeric|min:0',
        ]);

        // // Log input data untuk debugging
        // \Log::info('Validated data:', $validated);

        $amount = $request->input('amount');
        $commission = 0;

        if ($amount > 500000000) {
            $commission = $amount * 0.10;
        } elseif ($amount > 200000000) {
            $commission = $amount * 0.05;
        } elseif ($amount > 100000000) {
            $commission = $amount * 0.025;
        }

        // // Log hasil komisi untuk debugging
        // \Log::info('Calculated commission:', ['commission' => $commission]);

        return response()->json(['commission' => $commission]);
    }
}
