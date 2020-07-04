@extends('layouts.app')

@section('content')
<div class="flex-center2 position-ref2 full-height2">
    <div class="container">
        <div class="row justify-content-center">
            <div class="content2">
                <div class="title m-b-md text-center">
                        マッチ成立！！
                </div>
                <div class="m-b-md text-center explan">
                    {{$name}}様とのマッチが成立しました。
                </div>
                <div class="links text-center">
                    <form type="hidden" method="POST" action="{{ route('select_room',['room_id' => $id]) }}">
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{$id}}">
                    <button type="submit" class="main-link">
                        メッセージ画面へ進む
                    </button>
                </div>
            </div>
        </div>
    </div>
<div>
@endsection
