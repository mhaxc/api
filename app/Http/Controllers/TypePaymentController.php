<?php

namespace App\Http\Controllers;

use App\Http\Requests\TypePaymentRequest;
use App\Models\TypePayment;
use Illuminate\Http\Request;

class TypePaymentController extends Controller
{

    private $typepayments;
    public function __construct(Typepayment $typepayments)

    {
        $this->typepayments = $typepayments;
    }



    public function index()
    {
        $typepayments = TypePayment::all();
        return response()->json([
            'typepayments' => $typepayments
        ]);
    }

    public function show($id)
    {
        $typepayments = TypePayment::findOrFail($id);
        return response()->json($typepayments);
    }

    public function store(TypePaymentRequest $request)
    {
        $typepayments = TypePayment::create($request->all());
        return response()->json([
            'status' => 'true',
            'message' => "Categoria salva com sucesso!",
            'TypePayments' => $typepayments
        ], 201);
    }

    public function update(TypePaymentRequest $request, $id)
    {
        $typepayments = TypePayment::find($id);

        $typepayments->update($request->all());

        return response()->json([
            'status' => 'true',
            'message' => "pagamento atualizada com sucesso!",
            'TypePayment' => $typepayments
        ],201);
    }


    public function destroy($id)
    {
        $typepayments = TypePayment::find($id);
            $typepayments->delete();
        return response()->json([

            'message' => "categoria deletada com sucesso"
         ],200);
    }
}




