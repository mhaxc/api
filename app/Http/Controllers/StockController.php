<?php

namespace App\Http\Controllers;

use App\Http\Requests\StockRequest;
use App\Models\Stock;
use Illuminate\Http\Request;

class StockController extends Controller
{
    private $stocks;
    public function __construct(Stock $stocks)
    {
        $this->stocks = $stocks;
   }

    public function index()
    {
        $stocks = Stock::all();
        return response()->json([
            'Stock' => $stocks
        ]);
    }

    public function show($id)
    {
        $stocks = Stock::findOrFail($id);
        return response()->json($stocks);
    }

    public function store(Stock $request)
    {
        $stocks = Stock::create($request->all());
        return response()->json([
            'status' => 'true',
            'message' => "estoque salva com sucesso!",
            'Stock' => $stocks
        ], 201);
    }

    public function update(StockRequest $request, $id)
    {
        $stocks = Stock::find($id);

        $stocks->update($request->all());

        return response()->json([
            'status' => 'true',
            'message' => "estoque atualizada com sucesso!",
            'StockLocation' => $stocks
        ], 201);
    }


    public function destroy($id)
    {
        $stocks = Stock::find($id);
        $stocks->delete();
        return response()->json([

            'message' => "estoque deletada com sucesso"

        ], 200);
    }
}

