<?php

namespace App\Http\Controllers;

use App\Luggage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; //これ無いと「Auth::user()」使えない

class LuggageController extends Controller
{
    public function index()
    {
        return view('luggage');
    }

    public function store(Request $request)
    {
        $luggage = new Luggage();
        $year = $request->year;
        $month = $request->month;
        $day = $request->day;

        $luggage->username = Auth::user()->name;
        $luggage->user_id = Auth::user()->id;
        $luggage->delivery_origin = $request->delivery_origin;
        $luggage->shipping_adress = $request->shipping_adress;
        $luggage->delivery_at = $year."年".$month."月".$day."日";
        $luggage->size = $request->size;
        $luggage->remarks = $request->remarks;

        // dd($luggage);

        $luggage->save();

        return redirect('list');
    }
}
