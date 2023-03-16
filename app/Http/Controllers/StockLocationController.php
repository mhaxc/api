<?php

namespace App\Http\Controllers;

use App\Http\Requests\StockLocationRequest;
use App\Models\StockLocation;
use Illuminate\Http\Request;

class StockLocationController extends Controller
{

    private $model;
    public function __construct(StockLocation $model)
    {
        $this->model = $model;
    }

    public function index()
    {
        $data = StockLocation::all();
        return response()->json($data);
    }

    public function show($id)
    {
        $data = StockLocation::find($id);
        return response()->json($data);
    }

    public function store(StockLocationRequest $request)
    {

        $data = StockLocation::create($request->all());
        return response()->json($data);
    }

    public function update(StockLocationRequest $request, $id)
    {

        $data = StockLocation::find($id);
        $data->update($request->all());
        return response()->json($data);
    }

    public function delete($id)
    {
        $data = StockLocation::find($id);
        $data->delete();

        return response()->json('', 201);
    }
}
