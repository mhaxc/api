<?php

namespace App\Http\Controllers;

use App\Http\Requests\ItemRequest;
use App\Models\Item;
use Illuminate\Http\Request;


class ItemController extends Controller
{
    private $items;
    public function __construct(Item $items)
    {
        $this->items = $items;
    }

    public function index()
    {
        $items = Item::all();
        return response()->json($items);
    }



    public function store(ItemRequest $request)
    {
        $items = Item::create($request->all());
         return response()->json($items);
    }


    public function show(Item $item)

    {

    }

    public function update(Request $request, Item $item)
    {

    }

    public function destroy(Item $item)
    {

    }
}
