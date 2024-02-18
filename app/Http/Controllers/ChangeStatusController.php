<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class ChangeStatusController extends Controller
{
    public function dismissed() {

    }
    public function preparing(Request $request, $order_id) {
        $order = Order::find($order_id);
        $order->update(['category_id' => 2]);

        return redirect("/chefOrders");
    }

    public function ready(Request $request, $order_id) {
        $order = Order::find($order_id);
        $order->update(['category_id' => 3]);

        return redirect("/chefOrders");
    }

    public function give(Request $request, $order_id) {
        $order = Order::find($order_id);
        $order->update(['category_id' => 4]);

        return redirect("/waiterOrders");
    }
    public function paid(Request $request, $order_id) {
        $order = Order::find($order_id);
        $order->update(['category_id' => 5]);

        return redirect("/waiterOrders");
    }
}
