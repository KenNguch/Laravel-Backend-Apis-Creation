<?php

namespace App\Http\Controllers;

use App\Supplier;
use Illuminate\Http\Request;

class SupplierApiController extends Controller
{
    public function create(Request $request)
    {
        $supplier = new Supplier();
        $supplier->name = $request->input('name');

        $supplier->save();
        return response()->json($supplier);
    }

    public function show()
    {
        $supplier = Supplier::all();

        return response()->json($supplier);
    }

    public function showbyid($id)
    {
        $supplier = Supplier::find($id);

        return response()->json($supplier);
    }

    public function updatebyid(Request $request, $id)
    {
        $supplier = Supplier::find($id);
        $supplier->name = $request->input('name');

        $supplier->save();
        return response()->json($supplier);
    }

    public function deletebyid(Request $request, $id)
    {
        $supplier = Supplier::find($id);
        $supplier->delete($supplier);

        return response()->json($supplier);
    }
}
