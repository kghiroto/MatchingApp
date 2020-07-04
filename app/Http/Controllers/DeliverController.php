<?php

namespace App\Http\Controllers;

use App\Luggage;
use App\Room;
use Illuminate\Http\Request;

class DeliverController extends Controller
{
    public function index()
    {
        $list = Luggage::all();
        return view('deliver')->with('list',$list);
    }


    public function store(Request $request)
    {
        // dd($request->deliver_name);
        $room = new Room();

        $room->luggage_id = $request->id;
        $room->customer_name = $request->customer_name;
        $room->customer_id = $request->customer_id;
        $room->size = $request->size;
        $room->delivery_origin = $request->delivery_origin;
        $room->shipping_adress = $request->shipping_adress;
        $room->delivery_at = $request->delivery_at;
        $room->remarks = $request->remarks;
        $room->deliver_name = $request->deliver_name;
        $room->deliver_id = $request->deliver_id;

        $room->save();

        Luggage::where('id', $request->id)->delete();

        $name = $request->customer_name;
        $id = $room->id;
        return view('match',compact('name','id'));
    }
}
