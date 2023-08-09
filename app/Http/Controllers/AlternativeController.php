<?php

namespace App\Http\Controllers;

use App\Http\Requests\AlternativeUnitRequest as RequestsAlternativeUnitRequest;
use App\Models\AlternativeUnit;
use Illuminate\Http\Request;
use Illuminate\Http\Request\AlternativeUnitRequest;
use App\Models\Product;


class AlternativeController extends Controller
{
    private $alters;
    public function __construct(AlternativeUnit $alters)
    {
        $this->alters = $alters;
    }
    public function index()
    {
        $alters = AlternativeUnit::all();

        return response()->json($alters);
    }

    public function store(RequestsAlternativeUnitRequest $request)
    {
        $alters = AlternativeUnit::create($request->all());
        return response()->json($alters);

    }


    public function show($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
