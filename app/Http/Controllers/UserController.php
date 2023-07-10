<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    private $users;
    public function __construct(User $users)
    {
        $this->users = $users;
    }


    public function index()
    {
        $users = User::all();
        return response()->json([
            "FUNÇAO" => "USUARIOS ",
            "users" => $users
        ]);
    }

    public function show($id)
    {
        $users = User::find($id);
        if (empty($users)) {
            return 'USER NÂO ENCONTRADO';
        } else {
            return response()->json([
                "FUNÇAO" => " USER ",
                "users" => $users
            ]);
        }
    }

    public function store(UserRequest $request)
    {

        $users = User::create($request->all());
        return response()->json([
            "message" => "  usuario criado com Sucesso ",
            "users" => $users
        ]);
    }

    public function update(UserRequest $request, $id)
    {

        $users = User::find($id);
        $users->update($request->all());
        return response()->json([
            "message" => "  usuario Atualizado  com Sucesso ",
            "users" => $users
        ]);
    }

    public function destroy($id)
    {
        $users = User::find($id);
        $users->delete();
        return response()->json([
            "message" => "  usuario deletado com Sucesso ",
        ]);
    }
}
