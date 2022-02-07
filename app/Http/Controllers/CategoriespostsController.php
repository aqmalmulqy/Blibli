<?php

namespace App\Http\Controllers;

use App\Models\Categoriesposts;
use Illuminate\Http\Request;
use Laravel\Lumen\Routing\Controller as BaseController;

class CategoriespostsController extends BaseController
{
    public function index()
    {
        $categoryposts = Categoriesposts::OrderBy("id", "DESC")->paginate(10);

        $output = [
            "message" => "categoryposts",
            "result" => $categoryposts
        ];

        return response()->json($output, 200);
    }

    public function store(Request $request)
    {
        $input = $request->all();
        
        $categoryposts = Categoriesposts::create($input);

        return response()->json($categoryposts, 200);
    }

    public function show($id)
    {
        $categoryposts = Categoriesposts::find($id);

        if (!$categoryposts) {
            abort(404);
        }

        return response()->json($categoryposts, 200);
    }

    public function update(Request $request, $id)
    {
        $input = $request->all();
        $categoryposts = Categoriesposts::find($id);

        if (!$categoryposts) {
            abort(404);
        }

        $categoryposts->fill($input);
        $categoryposts->save();

        return response()->json($categoryposts, 200);
    }

    public function destroy($id)
    {
        $categoryposts = Categoriesposts::find($id);
        
        if (!$categoryposts) {
            abort(404);
        }

        $categoryposts->delete();
        $message = ["Pesan" => "Hapus halaman berhasil", "categoryposts_id" => $id];

        return response()->json($message, 200);
    }
}