<?php


namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Midtrans\Notification;

class PaymentController extends Controller
{
    public function notification(Request $request)
    {
        $notification = new Notification();
        
        $order = Order::where('order_number', $notification->order_id)->first();
        
        $transaction = $notification->transaction_status;
        $type = $notification->payment_type;
        $fraud = $notification->fraud_status;

        if ($transaction == 'capture') {
            if ($type == 'credit_card') {
                if($fraud == 'challenge') {
                    $order->payment_status = 'pending';
                } else {
                    $order->payment_status = 'paid';
                }
            }
        } else if ($transaction == 'settlement') {
            $order->payment_status = 'paid';
        } else if ($transaction == 'pending') {
            $order->payment_status = 'pending';
        } else if ($transaction == 'deny') {
            $order->payment_status = 'failed';
        } else if ($transaction == 'expire') {
            $order->payment_status = 'expired';
        } else if ($transaction == 'cancel') {
            $order->payment_status = 'failed';
        }

        $order->save();
        
        return response()->json(['status' => 'success']);
    }

    public function success()
    {
        return view('payment.success');
    }

    public function pending()
    {
        return view('payment.pending');
    }

    public function error()
    {
        return view('payment.error');
    }
}