<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\OrdeItemRequest;
use App\Models\Order;
use App\Models\OrderItem;


class Order_ItemController extends Controller

{
    private $ordersitems;
    public function __construct(OrderItem $ordersitems)
    {
        $this->ordersitems = $ordersitems;
    }

    public function index()
    {
        $ordersitems = OrderItem::all();
        return response()->json($ordersitems);

    }




    public function store(OrdeItemRequest $request)
    {
        //$ordersitems  = OrderItem::create($request->all());

        //return response()->json([
            //"message" => "  produtos criado com Sucesso ",
            //"orders" => $ordersitems
        //]);
    }


    public function show($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
