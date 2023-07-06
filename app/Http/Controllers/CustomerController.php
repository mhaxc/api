<?php

namespace App\Http\Controllers;

use App\Http\Requests\CustomerRequest;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{

    private $customers;
    public function __construct(Customer $customers)

    {
        $this->customers = $customers;
    }


    public function index()
    {
        $customers = Customer::all();
        return response()->json($customers);
    }

    public function show($id)
    {
        $customers = Customer::findOrFail($id);
        return response()->json($customers);
    }

    public function store(CustomerRequest $request)
    {
        $customers = Customer::create($request->all());
        return response()->json([
            'status' => 'true',
            'message' => "Cliente adicionado com sucesso",
            'Customer' => $customers
        ], 201);
    }

    public function update(CustomerRequest $request, $id)
    {

        $customers = Customer::find($id);

        $customers->update($request->all());

        return response()->json([
            'status' => 'true',
            'message' => "Cliente atualizado com sucesso",
            'Customer' => $customers
        ], 201);
    }

    public function destroy($id)
    {
        $customers = Customer::find($id);
        $customers->delete();

        return response()->json([
            'message' => "Cliente deletado com sucesso",
        ], 201);
    }
}
