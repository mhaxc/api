<?php

namespace App\Http\Controllers;

use App\Http\Requests\StockRequest;
use App\Models\Stock;
use Illuminate\Http\Request;

class StockController extends Controller
{

    private $model;
    public function __construct(Stock $model)
    {
        $this->model = $model;
    }


    public function index()
    {
        $data = Stock::all();
        return response()->json($data);
    }

    public function show($id)
    {
        $data = Stock::find($id);
        return response()->json($data);
    }

    public function store(StockRequest $request)
    {

        $data = Stock::create($request->all());
        return response()->json($data);
    }

    public function update(StockRequest $request, $id)
    {
        $data = Stock::find($id);
        $data->update($request->all());
        return response()->json($data);
    }

    public function delete($id)
    {
        $data = Stock::find($id);
        $data->delete();

        return response()->json('', 201);
    }
}
