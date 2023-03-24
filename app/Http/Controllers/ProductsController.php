<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{

    private $model;
    public function __construct(Product $model)
    {
        $this->model = $model;
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

        $data = Product::create($request->all());
        return response()->json($data);
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
