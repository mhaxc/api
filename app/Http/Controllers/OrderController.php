<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderRequest;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{


    private $model;
    public function __construct(Order $model)
    {
        $this->model = $model;
    }

    public function index()
    {
        $data = $this->model->with('items')->get();

        return response()->json($data);
        /*return view("Order.create");*/
    }

    public function show($id)
    {
        $data = Order::find($id);
        return response()->json($data);
    }

    //tentativa de mostrar só 1 item do pedido
    public function showItemOrder($id, $product_id)
    {
        $data = Order::find($id, $product_id);
        return response()->json($data);
    }

    public function store(OrderRequest $request)
    {
        $max_number = DB::table('orders')->max('number');

        $request_data = $request->all();
        $order = Order::create([
            'number' => ($max_number === null ? env("NRO_INITPED") : $max_number) + 1,
            'date' => $request_data['date'],
            'observation' => $request_data['observation'],
        ]);


        foreach ($request_data['items'] as $item) {
            $order->items()->create($item);
        }

        return response()->json($order);
    }

    public function update(OrderRequest $request, $id)
    {

        $data = Order::find($id);
        $data->update($request->all());
        return response()->json($data);
    }

    public function delete($id)
    {
        $data = Order::find($id);
        $data->delete();

        return response()->json('', 201);
    }

    public function deleteItem($id, $products_id)
    {
        //DB::table('orders_items')->where('order_id', $id)->where('product_id', $products_id)->delete();
        //OrderItem::where('order_id', $id)->where('product_id', $products_id)->delete();
        Order::find($id)->items()->where('product_id', $products_id)->delete();

        return response()->json('', 201);
    }



    //tentativa de criar item na ordem
    public function StoreAddItem(OrderRequest $request, $id)
    {
        $request_data = $request->find($id);
        $order = OrderItem::update([
            'product_id' => $request_data['product_id'],
            'quantity' => $request_data['quantity'],
            'value' => $request_data['value'],
        ]);

        return response()->json($order);
    }
}


    /*if ($max_number === null) {
            $max_number = env("NRO_INITPED");
        }*/
