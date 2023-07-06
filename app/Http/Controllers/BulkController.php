<?php

namespace App\Http\Controllers;

use App\Http\Requests\BulkRequest;
use App\Models\Bulk;
use Illuminate\Http\Request;

class BulkController extends Controller
{

    private $model;
    public function __construct(Bulk $model)
    {
        $this->model = $model;
    }


    public function index()
    {
        $data = $this->model->all();
        return response()->json($data);
    }

    public function show($slug)
    {
        $data = $this->model->find($slug);
        return response()->json($data);
    }

    public function store(Request $request)
    {
        $data = $this->model->create($request->all());
        return response()->json($data);
    }

    public function update(Request $request, $slug)
    {
        $data = $this->model->find($slug);
        $data->update($request->all());
        return response()->json($data);
    }

    public function delete($slug)
    {
        $data = $this->model->find($slug);
        $data->delete();

        return response()->json('', 201);
    }
}
