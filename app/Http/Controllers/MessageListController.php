<?php

namespace App\Http\Controllers;

use App\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; //これ無いと「Auth::user()」使えない

class MessageListController extends Controller
{
    public function index()
    {
        $list = Room::all();
        $user_id = Auth::user()->id;
        // return view('message-list',compact(['list' => $list],'user_id'));
        // return view('message-list')->with(['list','user_id'],[$list,$user_id]);
        return view('message-list')->with('list',$list);
    }
}
