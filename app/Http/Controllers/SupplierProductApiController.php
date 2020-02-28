<?php

namespace App\Http\Controllers;

use App\SupplierProduct;
use Illuminate\Http\Request;

class SupplierProductApiController extends Controller
{
    public function create(Request $request)
    {
        $supplierproducts = new SupplierProduct();
        $supplierproducts->supply_id = $request->input('supply_id');
        $supplierproducts->product_id = $request->input('product_id');

        $supplierproducts->save();
        return response()->json($supplierproducts);
    }

    public function show()
    {
        $supplierproducts = SupplierProduct::all();

        return response()->json($supplierproducts);
    }

    public function showbyid($id)
    {
        $supplierproducts = SupplierProduct::find($id);

        return response()->json($supplierproducts);
    }

    public function updatebyid(Request $request, $id)
    {
        $supplierproducts = OrderDetails::find($id);
        $supplierproducts->supply = $request->input('supply_id');
        $supplierproducts->product_id = $request->input('product_id');

        $supplierproducts->save();
        return response()->json($supplierproducts);
    }

    public function deletebyid(Request $request, $id)
    {
        $supplierproducts = SupplierProduct::find($id);
        $supplierproducts->delete($supplierproducts);

        return response()->json($supplierproducts);
    }
}
