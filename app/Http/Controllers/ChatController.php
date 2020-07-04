<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;

use App\Comment;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class ChatController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function add(Request $request)
    {
        $user = Auth::user();
        $now = Carbon::now('Asia/Tokyo');
        // dd($now->format('Y/m/d H:i:s'));
        $comment = $request->input('comment');
        Comment::create([
            'room_id' => $request->room_id,
            'login_id' => $user->id,
            'name' => $user->name,
            'comment' => $comment,
            'time' => $now->format('Y/m/d H:i:s')
        ]);
        $room_id = $request->room_id;
        return redirect()->route('chat',compact('room_id'));
    }

    public function getData()
    {
        $comments = Comment::orderBy('created_at', 'desc')->get();
        $json = ["comments" => $comments];
        return response()->json($json);
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $room_id = $request->room_id;
        $comments = Comment::get();
        return view('chat',compact(['comments' => $comments],'room_id'));
    }

    public function selectRoom(Request $request)
    {
        $room_id = $request->id;
        $comments = Comment::get();
        return view('chat', compact(['comments' => $comments],'room_id'));
    }

}
