<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    private $model;
    public function __construct(User $model)
    {
        $this->model = $model;
    }


    public function index()
    {
        $data = User::all();
        return response()->json($data);
    }

    public function show($id)
    {
        $data = User::find($id);
        return response()->json($data);
    }

    public function store(UserRequest $request)
    {

        $data = User::create($request->all());
        return response()->json($data);
    }

    public function update(UserRequest $request, $id)
    {

        $data = User::find($id);
        $data->update($request->all());
        return response()->json($data);
    }

    public function delete($id)
    {
        $data = User::find($id);
        $data->delete();

        return response()->json('', 201);
    }
}
