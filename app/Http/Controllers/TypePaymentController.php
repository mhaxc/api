<?php

namespace App\Http\Controllers;

use App\Http\Requests\TypePaymentRequest;
use App\Models\TypePayment;
use Illuminate\Http\Request;

class TypePaymentController extends Controller
{

    private $typepayments;
    public function __construct(TypePayment $typepayments)
    {
        $this->typepayments = $typepayments;
    }

    public function index()
    {
        $typepayments = TypePayment::all();
        return response()->json([
            "FUNÇAO" => "typepayments ",
            "typepayments" => $typepayments
        ]);
    }

    public function show($id)
    {
        $typepayments = TypePayment::find($id);
        if (empty($typepayments)) {
            return 'tipo de pagamento NÂO ENCONTRADO';
        } else {
            return response()->json([
                "FUNÇAO" => " tipo de pagamento ",
                "typepayments" => $typepayments
            ]);
        }
    }

    public function store(TypePaymentRequest $request)
    {

        $typepayments = TypePayment::create($request->all());
        return response()->json([
            "message" => "  tipo de pagamento criado com Sucesso ",
            "typepayments" => $typepayments
        ]);
    }

    public function update(TypePaymentRequest $request, $id)
    {

        $typepayments = TypePayment::find($id);
        $typepayments->update($request->all());
        return response()->json([
            "message" => "  tipo de pagamento Atualizado  com Sucesso ",
            "typepayments" => $typepayments
        ]);
    }

    public function destroy($id)
    {
        $typepayments = TypePayment::find($id);
        $typepayments->delete();

        return response()->json([
            "message" => "  tipo de pagamento deletado com Sucesso ",
        ]);
    }
}
