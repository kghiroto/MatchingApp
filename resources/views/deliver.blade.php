@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    @auth
        <div class="card m-b-md">
            <div class="card-body">
                <p class="list-top">受注可能な案件の一覧</p>
            </div>
        </div>

        <div class="card-columns" style="width: 90%;">
        @foreach ($list as $list)
            <form type="hidden" method="POST" action="{{ route('room') }}" onSubmit="return check()" class="col-md-12">
            {{ csrf_field() }}
                <input type="hidden" name="id" value="{{$list->id}}">
                <input type="hidden" name="customer_name" value="{{ $list->username}}">
                <input type="hidden" name="customer_id" value="{{ $list->user_id}}">
                <input type="hidden" name="size" value="{{ $list->size}}">
                <input type="hidden" name="delivery_origin" value="{{ $list->delivery_origin }}">
                <input type="hidden" name="shipping_adress" value="{{ $list->shipping_adress }}">
                <input type="hidden" name="delivery_at" value="{{ $list->delivery_at }}">
                <input type="hidden" name="remarks" value="{{ $list->remarks }}">
                <input type="hidden" name="deliver_name" value="{{ Auth::user()->name }}">
                <input type="hidden" name="deliver_id" value="{{ Auth::user()->id }}">
            <button type="submit" style="background:none; border:none; width:100%;">
                <div class="card content">
                    <div class="card-body">
                        <p id="card-text{{$list->id}}">
                        お客様名:{{ $list->username}}<br>
                        荷物サイズ:{{ $list->size}}<br>
                        お届け元:{{ $list->delivery_origin }}<br>
                        お届け先:{{ $list->shipping_adress }}<br>
                        お届け希望日:{{ $list->delivery_at }}<br>
                        備考:{{ $list->remarks }}
                        </p>
                    </div>
                </div>
            </button>
            </form>
        @endforeach
        </div>
    </div>
    @else
    <div id="accordion" class="col-md-8">
            <div class="card my-4">
                <div id="headingReg" class="card-header">配達を引き受ける（業者向け）
                </div>
                <div id="reg" class="card-body" aria-labelledby="headingReg" data-parent="#accordion">
                    <div>引き受ける前に、ログインしてください。</div>
                    <a href="{{ route('login')}}" class="btn btn-primary">ログイン</a>
                </div>
            </div>
    </div>
</div>
@endauth

<script type="text/javascript">
    function check(){

        if(window.confirm('選択した案件を本当に受注しますか？')){ // 確認ダイアログを表示

            return true; // 「OK」時は送信を実行

        }
        else{ // 「キャンセル」時の処理

            window.alert('キャンセルされました'); // 警告ダイアログを表示
            return false; // 送信を中止

        }
    }
</script>
@endsection
