<?php

namespace App\Http\Controllers;

use App\Http\Requests\TypePaymentRequest;
use App\Models\TypePayment;
use Illuminate\Http\Request;

class TypePaymentController extends Controller
{

    private $model;
    public function __construct(TypePayment $model)
    {
        $this->model = $model;
    }

    public function index()
    {
        $data = TypePayment::all();
        return response()->json($data);
    }

    public function show($id)
    {
        $data = TypePayment::find($id);
        return response()->json($data);
    }

    public function store(TypePaymentRequest $request)
    {

        $data = TypePayment::create($request->all());
        return response()->json($data);
    }

    public function update(TypePaymentRequest $request, $id)
    {

        $data = TypePayment::find($id);
        $data->update($request->all());
        return response()->json($data);
    }

    public function delete($id)
    {
        $data = TypePayment::find($id);
        $data->delete();

        return response()->json('', 201);
    }
}
