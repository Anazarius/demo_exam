<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AddOrderController extends Controller
{
    public function add_order(Request $request)
    {
        $userData = $request->only('num_table', 'count_guests', 'order');
        $validator = Validator::make($userData, [
            'num_table' => 'required',
            'count_guests' => 'required',
            'order' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect('/addOrders')
                ->withErrors($validator)
                ->withInput();
        }

        $order = new Order();
        $order->num_table = $userData['num_table'];
        $order->count_guests = $userData['count_guests'];
        $order->order = $userData['order'];
        $order->category_id = '1';

        $order->save();

        $request->session()->flash('success', 'Успешно!');
        return redirect("/waiterOrders");
    }
}
