@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div id="accordion" class="col-md-8">
        </div>

        <div class="card m-b-md">
            <div class="card-body">
                <p class="list-top">メッセージ管理ページ</p>
            </div>
        </div>

        @foreach ($list as $list)
            @if ( Auth::id() == $list->customer_id )

            <div class="card mb-1 message-list">
                <div class="card-body">
                    <div class="row">
                        <div class="col-10">
                            <h5>請負者:{{ $list->deliver_name }}</h5>
                            <h5> </h5>
                            <h6 class="card-subtitle text-muted">RoomID:{{ $list->id }}</h6>
                        </div>
                        <div class="col col-xs-2">
                            <form type="hidden" method="POST" action="{{ route('select_room',$list->id) }}">
                            {{ csrf_field() }}
                            <input type="hidden" name="id" value="{{ $list->id }}">
                            <button type="submit" class="btn btn-outline-success btn-block">
                                内容を確認する
                            </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            @elseif( Auth::id() == $list->deliver_id )

            <div class="card mb-1 message-list">
                <div class="card-body">
                    <div class="row">
                        <div class="col-10">
                            <h5>依頼者:{{ $list->customer_name }}</h5>
                            <h5> </h5>
                            <h6 class="card-subtitle text-muted">RoomID:{{ $list->id }}</h6>
                        </div>
                        <div class="col col-xs-2">
                            <form type="hidden" method="POST" action="{{ route('select_room',$list->id) }}">
                            {{ csrf_field() }}
                            <input type="hidden" name="id" value="{{ $list->id }}">
                            <button type="submit" class="btn btn-outline-success btn-block" style="background:none; border:none; width:100%;">
                                内容を確認する
                            </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            @else
            @endif
        @endforeach
@endsection
