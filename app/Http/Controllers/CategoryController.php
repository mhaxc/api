<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller{




    public function index()
    {
        $categories = Category::all();
        return response()->json([
            'categories' => $categories
        ]);
    }

    public function show($id)
    {
        $categories = Category::findOrFail($id);
        return response()->json($categories);
    }

    public function store(CategoryRequest $request)
    {
        $categories = Category::create($request->all());
            return response()->json([
            'status'=>'true',
            'message' => "Categoria salva com sucesso!",
            'Category' => $categories
        ], 201);


    }

    public function update(CategoryRequest $request,$id )
    {
        $categories = Category::find($id);

        $categories->update($request->all());

        return response()->json([
            'status' => 'true',
            'message' => "Categoria atualizada com sucesso!",
            'Category' => $categories
        ], 201);

    }


    public function destroy($id)
    {
     $categories = Category::find($id);
        $categories->delete();
    return response()->json([

          'message'=>"categoria deletada com sucesso"

        ],200);

    }

}

