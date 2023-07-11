<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductsController extends Controller
{

    private $products;
    public function __construct(Product $products)
    {
        $this->products = $products;
    }

    public function index()
    {
        $products = Product::all();


        return response()->json([
             "FUNÇAO" => " PRODUTOS ",
            "PRODUCTS" => $products
        ]);
    }

    public function show($id)
    {
        $products = Product::find($id);
        if (empty($products)) {
            return 'PRODUTOS NÂO ENCONTRADO';
        } else {
            return response()->json([
                "FUNÇAO" => " PRODUTOS ",
                "produtos" => $products
            ]);
        }
    }

    public function store(ProductRequest $request)
    {
         $products = Product::create($request->all());

        return response()->json([
            "message" => "  produtos criado com Sucesso ",
            "products" => $products
        ]);
    }

    public function update(ProductRequest $request, $id)
    {
       $products = Product::find($id);
        $products->update($request->all());
        return response()->json([
            "message" => "  produtos atualizada com Sucesso ",
            "products" => $products
        ]);
    }

    public function destroy($id)
    {
        $data = Product::find($id);
        $data->delete();
        return response()->json([
            "message" => "  Produto Deletada com Sucesso",

        ]);


    }
}
