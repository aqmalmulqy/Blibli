<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use Laravel\Lumen\Routing\Controller as BaseController;

class ProductsController extends BaseController
{
    public function index()
    {
        $products = Products::OrderBy("id", "DESC")->paginate(10);

        $output = [
            "message" => "products",
            "result" => $products
        ];

        return response()->json($output, 200);
    }

    public function store(Request $request)
    {
        $input = $request->all();
        
        $products = Products::create($input);

        return response()->json($products, 200);
    }

    public function show($id)
    {
        $products = Products::find($id);

        if (!$products) {
            abort(404);
        }

        return response()->json($products, 200);
    }

    public function update(Request $request, $id)
    {
        $input = $request->all();
        $products = Products::find($id);

        if (!$products) {
            abort(404);
        }

        $products->fill($input);
        $products->save();

        return response()->json($products, 200);
    }

    public function destroy($id)
    {
        $products = Products::find($id);
        
        if (!$products) {
            abort(404);
        }

        $products->delete();
        $message = ["Pesan" => "Hapus halaman berhasil", "products_id" => $id];

        return response()->json($message, 200);
    }
}