<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
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
        return response()->json($products);
    }

    public function show($id)
    {
        $products = Product::find($id);
        return response()->json($products);
    }

    public function store(ProductRequest $request)
    {
        $products = Product::create($request->all());
        return response()->json($products);
    }

    public function update(ProductRequest $request, $id)
    {

        $products = Product::find($id);
        $products->update($request->all());
        return response()->json($products);
    }

    public function delete($id)
    {
        $products = Product::find($id);
        $products->delete();

        return response()->json('', 201);
    }
}
