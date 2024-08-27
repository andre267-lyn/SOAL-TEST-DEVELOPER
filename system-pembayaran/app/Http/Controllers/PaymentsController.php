<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;
use Illuminate\Routing\Controller;

class PaymentsController extends Controller
{
    public function makePayment(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'sale_id' => 'required|exists:sales,id',
            'amount' => 'required|numeric|min:0',
        ]);

        // // Log input data untuk debugging
        // \Log::info('Validated data:', $validated);

        $payment = new Payment();
        $payment->sale_id = $request->input('sale_id');
        $payment->amount = $request->input('amount');
        $payment->save();

        // // Log data pembayaran untuk debugging
        // \Log::info('Payment saved:', $payment->toArray());

        return response()->json(['message' => 'Payment successful']);
    }
}
