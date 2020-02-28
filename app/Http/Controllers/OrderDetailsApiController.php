<?php

namespace App\Http\Controllers;

use App\OrderDetails;
use Illuminate\Http\Request;

class OrderDetailsApiController extends Controller
{
    public function create(Request $request)
    {
        $orderdetails = new OrderDetails();
        $orderdetails->order_id = $request->input('order_id');
        $orderdetails->product_id = $request->input('product_id');

        $orderdetails->save();
        return response()->json($orderdetails);
    }

    public function show()
    {
        $orderdetails = OrderDetails::all();

        return response()->json($orderdetails);
    }

    public function showbyid($id)
    {
        $orderdetails = OrderDetails::find($id);

        return response()->json($orderdetails);
    }

    public function updatebyid(Request $request, $id)
    {
        $orderdetails = OrderDetails::find($id);
        $orderdetails->order_id = $request->input('order_id');
        $orderdetails->product_id = $request->input('product_id');

        $orderdetails->save();
        return response()->json($orderdetails);
    }

    public function deletebyid(Request $request, $id)
    {
        $orderdetails = OrderDetails::find($id);
        $orderdetails->delete($orderdetails);

        return response()->json($orderdetails);
    }
}
