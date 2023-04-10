<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

   // private $model;
    //public function __construct(User $model)
   // {
      //  $this->model = $model;
   // }


    public function index()
    {
        $users = User::all();
        return response()->json($users);
    }

    public function show($id)
    {
        $users = User::findOrFail($id);
        return response()->json($users);
    }

    public function store(UserRequest $request)
    {
        $users = User::create($request->all());
        return response()->json([
            'status' => 'true',
            'message' => "usuario criado com sucesso!",
            'Users' => $users
        ], 201);
    }

    public function update(UserRequest $request, $id)
    {
        $users = User::find($id);

        $users->update($request->all());

        return response()->json([
            'status'=>'true',
            'message'=>'usuario atualizado com sucesso',
            'User'=>$users

        ],201);
    }

    public function delete($id)
    {
        $users = User::find($id);
        $users->delete();

        return response()->json([
            'message' => 'usuario deletado com sucesso',
        ]);
    }
}
