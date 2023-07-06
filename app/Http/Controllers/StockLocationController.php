<?php

namespace App\Http\Controllers;

use App\Http\Requests\StockLocationRequest;
use App\Models\StockLocation;
use Illuminate\Http\Request;

class StockLocationController extends Controller
{
    private $stocklocations;
    public function __construct(Stocklocation $stocklocations)

     {
        $this->stocklocations = $stocklocations;
     }



    public function index()
    {
        $stocklocations = StockLocation::all();
        return response()->json([
            'categories' => $stocklocations
        ]);
    }

    public function show($id)
    {
        $stocklocations = StockLocation::findOrFail($id);
        return response()->json($stocklocations);
    }

    public function store(StockLocationRequest $request)
    {
        $stocklocations = StockLocation::create($request->all());
        return response()->json([
            'status' => 'true',
            'message' => "Categoria salva com sucesso!",
            'StockLocation' => $stocklocations
        ], 201);
    }

    public function update(StockLocationRequest $request, $id)
    {
        $stocklocations = StockLocation::find($id);

        $stocklocations->update($request->all());

        return response()->json([
            'status' => 'true',
            'message' => "Categoria atualizada com sucesso!",
            'StockLocation' => $stocklocations
        ], 201);
    }


    public function destroy($id)
    {
        $categories = StockLocation::find($id);
        $categories->delete();
        return response()->json([

            'message' => "categoria deletada com sucesso"

        ], 200);
    }
}
