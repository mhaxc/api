<?php

namespace App\Http\Controllers;

use App\Http\Requests\StockLocationRequest;
use App\Models\StockLocation;
use Illuminate\Http\Request;

class StockLocationController extends Controller
{

    private $stockLocations;
    public function __construct(StockLocation $stockLocations)
    {
        $this->stockLocations = $stockLocations;
    }

    public function index()
    {
        $stockLocations = StockLocation::all();
        return response()->json([
            "FUNÇAO" => " LUGAR DO ESTOQUE ",
            "stockLocations" => $stockLocations
        ]);
    }

    public function show($id)
    {
        $stockLocations = StockLocation::find($id);
        if (empty($stockLocations)) {
            return 'CATEGORIA NÂO ENCONTRADO';
        } else {
            return response()->json([
                "FUNÇAO" => " stockLocations ",
                "stockLocations" => $stockLocations

                  ]);
                }
    }

    public function store(StockLocationRequest $request)
    {

        $stockLocations = StockLocation::create($request->all());
         return response()->json([
            "message" => "  estoque criado com Sucesso ",
            "stockLocations" => $stockLocations
        ]);
    }

    public function update(StockLocationRequest $request, $id)
    {

        $stockLocations = StockLocation::find($id);
        $stockLocations->update($request->all());
        return response()->json([
            "message"=>"estoque atualizado com sucesso",
            "stockLocations"=> $stockLocations

        ]);
    }

    public function destroy($id)
    {
        $stockLocations = StockLocation::find($id);
        $stockLocations->delete();
        return response()->json([
            "message" => "estoque deletado com sucesso"


        ]);
    }
}
