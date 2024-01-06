<?php

namespace App\Http\Controllers;

use App\Http\Requests\AlternativeUnitRequest as RequestsAlternativeUnitRequest;
use App\Models\AlternativeUnit;
use Illuminate\Http\Request;
use App\Models\Product;


class AlternativeController extends Controller
{
    //private $alternatives_units;
        //public function __construct(AlternativeUnit $alternatives_units)
        //{
           // $this->alternatives_units = $alternatives_units;
      //  }


     //public function index()
       // {
       // $alternatives_units = AlternativeUnit::all();

        //return response()->json($alternatives_units);
        //}


     //public function store(RequestsAlternativeUnitRequest $request)
     //{
       // $alternatives_units = AlternativeUnit::create($request->all());
        //return response()->json($alternatives_units);

   // }


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
