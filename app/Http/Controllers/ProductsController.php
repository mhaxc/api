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
             "FUNÇAO" => " PRODUCTS ",
            "PRODUCTS" => $products
        ]);
    }

    public function show($id)
    {
        $products = Product::find($id);
        return response()->json($products);
    }

    public function store(ProductRequest $request)
    {
         $products = Product::create($request->all());
         $categories=Category::find($request->all());
        return response()->json($products,$categories);
    }

    public function update(ProductRequest $request, $id)
    {

        $data = Product::find($id);
        $data->update($request->all());
        return response()->json($data);
    }

    public function delete($id)
    {
        $data = Product::find($id);
        $data->delete();

        return response()->json('', 201);
    }
}
