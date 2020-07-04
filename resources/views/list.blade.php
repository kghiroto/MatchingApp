@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div id="accordion" class="col-md-8">
        </div>

        @auth
        <div class="card m-b-md">
            <div class="card-body">
                <p class="list-top">{{ Auth::user()->name }}さんの依頼リスト</p>
            </div>
        </div>
        @endauth

        <div class="card-columns">
        @foreach ($list as $list)
            @if ($list->user_id == Auth::user()->id)
            <div class="card">
                <div class="card-body">
                    <p class="card-text">
                        荷物サイズ:{{ $list->size}}<br>
                        お届け元:{{ $list->delivery_origin }}<br>
                        お届け先:{{ $list->shipping_adress }}<br>
                        お届け希望日:{{ $list->delivery_at }}<br>
                        備考:{{ $list->remarks }}
                    </p>
                </div>
            </div>
            @endif
        @endforeach
        </div>
    </div>
</div>
@endsection
