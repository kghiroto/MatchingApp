<?php

namespace App\Http\Controllers;

use App\Luggage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ListController extends Controller
{
    public function index()
    {
        $list = Luggage::all();
        return view('list')->with('list',$list);
    }
}
