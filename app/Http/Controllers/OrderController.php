<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderRequest;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;


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
            return 'PRODUTOS NÂO ENCONTRADO';
        } else {
            return response()->json([
                "FUNÇAO" => " PRODUTOS ",
                "ORDERS" => $orders
            ]);
        }

    }



    public function store( OrderRequest $request)
    {
        $orders = Order::create($request->all());
        return response()->json([
            "message" => "  produtos criado com Sucesso ",
            "orders" => $orders
        ]);

    }

    public function update(OrderRequest $request, $id)
    {

        $orders = Order::find($id);
        $orders->update($request->all());
        return response()->json($orders);
    }

    public function destroy($id)
    {
        $orders = Order::find($id);
        $orders->delete();

        return response()->json('', 201);
    }

    public function deleteItem($id, $products_id)
    {
        //DB::table('orders_items')->where('order_id', $id)->where('product_id', $products_id)->delete();
        //OrderItem::where('order_id', $id)->where('product_id', $products_id)->delete();
        //Order::find($id)->items()->where('product_id', $products_id)->delete();

      // return response()->json('', 201);
    }



}


    /*if ($max_number === null) {
            $max_number = env("NRO_INITPED");
        }*/
