<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderRequest;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;






class OrderController extends Controller

{
    private $orders;
        public function __construct(Order $orders)
        {
        $this->orders = $orders;

     }

        public function index()
        {

            $orders = Order::all();
            return response()->json($orders);

         }


         public function show($id)
         {
        $orders = Order::find($id);
        if (empty($orders)) {
            return 'PEDIDO NÂO ENCONTRADO';
         } else {
            return response()->json([
                "FUNÇAO" => " PEDIDOS ",
                "ORDERS" => $orders
            ]);
        }

    }



    public function store( OrderRequest $request)
    {
        $orders = Order::create($request->all());

        return response()->json([
            "message" => "  pedido criado com Sucesso ",
            "FUNÇAO" => " PEDIDOS ",
            "ORDERS" => $orders

        ]);

    }

    public function update(OrderRequest $request, $id)
    {

        $orders = Order::find($id);
        $orders->update($request->all());
        return response()->json([
            "message" => "  pedido atualizado com Sucesso ",
            "orders" => $orders
        ]);

    }

    public function destroy($id)
    {
        $orders = Order::find($id);
        $orders->delete();

        return response()->json([
            "message" => "  pedido atualizado com Sucesso ",

        ]);
    }








}


