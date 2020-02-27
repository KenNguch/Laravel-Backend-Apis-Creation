<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;

class OrderApiController extends Controller
{
    public function create(Request $request)
    {
        $order = new Order();
        $order->order_number = $request->input('order_number');

        $order->save();
        return response()->json($order);
    }

    public function show()
    {
        $order = Order::all();

        return response()->json($order);
    }

    public function showbyid($id)
    {

        $students = Order::find($id);

        return response()->json($students);
    }

    public function updatebyid(Request $request, $id)
    {
        $order = Order::find($id);

        $order->order_number = $request->input('order_number');

        $order->save();
        return response()->json($order);
    }

    public function deletebyid(Request $request, $id)
    {
        $order = Order::find($id);
        $order->delete($order);

        return response()->json($order);
    }
}
