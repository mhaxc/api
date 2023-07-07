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
        $bulks = Bulk::all();
        return response()->json([
            "FUNÇAO" => " Lista de Volumes",
            "bulks" => $bulks
        ]);

    }

    public function show($slug)
    {
        $bulks = Bulk::find($slug);

        if(empty($bulks)){
            return 'VOLUME NÂO ENCONTRADO';
        }else {
            return response()->json([
            "FUNÇAO" => " VOLUMES ",
            "bulks" => $bulks
        ]);}

    }

    public function store(BulkRequest $request)
    {
        $bulks = Bulk::create($request->all());

        return response()->json([
            "message" => "  Volume criado com Sucesso ",
            "bulks" => $bulks
        ]);


    }

    public function update(BulkRequest $request, $slug, Bulk $bulks)
    {
       $bulks->update($request->all());
        return response()->json([
            "message" => "Volume editado com Sucesso",
            "bulks" => $bulks
        ]);
    }

    public function destroy($slug)
    {
        $bulks = Bulk::find($slug);
        $bulks->delete();
        return response()->json([
            "message" => "Volume Delete com Sucesso",

        ]);
    }

}

