<?php

namespace App\Http\Controllers;

use App\Http\Requests\BulkRequest;
use App\Models\Bulk;
use Illuminate\Http\Request;

class BulkController extends Controller
{



    private $bulks;

    public function __construct(Bulk $bulks)
    {
        $this->bulks = $bulks;
    }


    public function index()

    {
        $bulks = $this->bulks->all();
        return response()->json($bulks);
    }

    public function show($slug)

    {
        $bulks = Bulk::findOrFail($slug);
        return response()->json($bulks);

    }

    public function store(BulkRequest $request)
    {
        $bulks = Bulk::create($request->all());
        return response()->json([
            'status' => 'true',
            'message' => "volume salva com sucesso",
            'Bulk' => $bulks
        ], 201);
    }

    public function update(BulkRequest $request, $slug)
    {

        $bulks=Bulk::find($slug);

        $bulks->update($request->all());

        return response()->json([
            'status' => 'true',
            'message' => "volume  atualizada com sucesso",
            'Bulk' => $bulks
        ], 201);


    }

    public function destroy($slug)

    {
        $bulks = Bulk::find($slug);

        $bulks->delete();
        return response()->json([

            'message' => "volume deletada com sucesso"

        ], 200);
    }


}
