<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller{


    private $categories;
    public function __construct(Category $categories)
    {
        $this->categories = $categories;
    }

    public function index()
    {
        $categories = Category::all();
        return response()->json([
            "FUNÇAO" => " CATEGORIAS ",
            "categories" => $categories
        ]);
    }

    public function show($id)
    {
        $categories = Category::find($id);

        if (empty($categories)) {
            return 'CATEGORIA NÂO ENCONTRADO';
        } else {
            return response()->json([
                "FUNÇAO" => " CATEGORIA ",
                "categories" => $categories
            ]);
        }

    }

    public function store(CategoryRequest $request)
    {
        $categories = Category::create($request->all());
        return response()->json([
            "message" => "  categoria criado com Sucesso ",
            "categorias" => $categories
        ]);
    }

    public function update(CategoryRequest $request, $id)
    {

        $categories = Category::find($id);
        $categories->update($request->all());
        return response()->json([
            "message" => "  categoria atualizada com Sucesso ",
            "categorias" => $categories
        ]);
    }

    public function destroy($id)
    {
        $categories = Category::find($id);
        $categories->delete();
         return response()->json([
            "message" => "  categoria Deletada com Sucesso ",

        ]);
    }

}
