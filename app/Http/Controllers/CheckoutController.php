<?php


namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderItem;
use App\Services\MidtransService;
use Illuminate\Http\Request;
use Cart;

class CheckoutController extends Controller
{
    protected $midtransService;

    public function __construct(MidtransService $midtransService)
    {
        $this->midtransService = $midtransService;
    }

    public function process(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'alamat' => 'required',
        ]);

        $order = Order::create([
            'order_number' => 'ORD-' . strtoupper(uniqid()),
            'total_amount' => Cart::total(),
            'nama' => $request->nama,
            'email' => $request->email,
            'phone' => $request->phone,
            'alamat' => $request->alamat,
            'status' => 'pending',
            'payment_status' => 'unpaid'
        ]);

        foreach(Cart::content() as $item) {
            OrderItem::create([
                'order_id' => $order->id,
                'product_id' => $item->id,
                'quantity' => $item->qty,
                'price' => $item->price,
                'subtotal' => $item->subtotal
            ]);
        }

        try {
            $snapToken = $this->midtransService->createTransaction($order);
            $order->snap_token = $snapToken;
            $order->save();

            Cart::destroy();

            return view('payment', compact('order', 'snapToken'));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}