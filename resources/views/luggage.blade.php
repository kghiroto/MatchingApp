@extends('layouts.app')

@section('content')
<body>

<div class="container">
    <div class="row justify-content-center">
        <div id="accordion" class="col-md-8">
            <div class="card my-4">
                <div id="headingReg" class="card-header">配達依頼する（依頼者向け）
                </div>
                <div id="reg" class="card-body" aria-labelledby="headingReg" data-parent="#accordion">
                    @auth
                        <form method="POST" action="{{ route('luggage') }}">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label>お届け元住所</label>
                                <input type="text" autocomplete="off" class="form-control" name="delivery_origin" value="{{ isset($luggage) ? $luggage->delivery_origin : ''}}"></input>
                            </div>
                            <div class="form-group">
                                <label>お届け先住所</label>
                                <input type="text" autocomplete="off" class="form-control" name="shipping_adress" value="{{ isset($luggage) ? $luggage->shipping_adress : ''}}"></input>
                            </div>
                            <div class="form-group">
                                <label>お届け希望日</label>
                                <div style="display: flex;">
                                    <select type="text" class="form-control" id="select_year" name="year" value="{{ isset($luggage) ? $luggage->year : ''}}" style="margin: 10px;">
                                        <option value="{{ isset($luggage) ? $luggage->year : ''}}" selected>年</option>
                                        <option value="2020">2020年</option>
                                        <option value="2021">2021年</option>
                                    </select>
                                    <select type="text" class="form-control" id="select_month" name="month" value="{{ isset($luggage) ? $luggage->month : ''}}" style="margin: 10px;">
                                        <option value="{{ isset($luggage) ? $luggage->month : ''}}" selected>月</option>
                                        <option value="1">1月</option>
                                        <option value="2">2月</option>
                                        <option value="3">3月</option>
                                        <option value="4">4月</option>
                                        <option value="5">5月</option>
                                        <option value="6">6月</option>
                                        <option value="7">7月</option>
                                        <option value="8">8月</option>
                                        <option value="9">9月</option>
                                        <option value="10">10月</option>
                                        <option value="11">11月</option>
                                        <option value="12">12月</option>
                                    </select>
                                    <select type="text" class="form-control" id="select_day" name="day" value="{{ isset($luggage) ? $luggage->day : ''}}" style="margin: 10px;">
                                        <option value="{{ isset($luggage) ? $luggage->day : ''}}"  selected>日</option>
                                        <option value="1">1日</option>
                                        <option value="2">2日</option>
                                        <option value="3">3日</option>
                                        <option value="4">4日</option>
                                        <option value="5">5日</option>
                                        <option value="6">6日</option>
                                        <option value="7">7日</option>
                                        <option value="8">8日</option>
                                        <option value="9">9日</option>
                                        <option value="10">10日</option>
                                        <option value="11">11日</option>
                                        <option value="12">12日</option>
                                        <option value="13">13日</option>
                                        <option value="14">14日</option>
                                        <option value="15">15日</option>
                                        <option value="16">16日</option>
                                        <option value="17">17日</option>
                                        <option value="18">18日</option>
                                        <option value="19">19日</option>
                                        <option value="20">20日</option>
                                        <option value="21">21日</option>
                                        <option value="22">22日</option>
                                        <option value="23">23日</option>
                                        <option value="24">24日</option>
                                        <option value="25">25日</option>
                                        <option value="26">26日</option>
                                        <option value="27">27日</option>
                                        <option value="28">28日</option>
                                        <option value="29">29日</option>
                                        <option value="30">30日</option>
                                        <option value="31">31日</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>荷物のサイズ</label>
                                <select class="form-control" name="size" value="{{ isset($luggage) ? $luggage->size : ''}}">
                                <option value="{{ isset($luggage) ? $luggage->size : ''}}" selected>選択する</option>
                                <option value="S">Sサイズ</option>
                                <option value="M">Mサイズ</option>
                                <option value="L">Lサイズ</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>備考</label>
                                <textarea autocomplete="off" class="form-control" name="remarks" value="{{ isset($luggage) ? $luggage->remarks : ''}}"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">送信</button>
                        </form>
                    @else
                        <div>投稿するには、ログインしてください。</div>
                        <a href="{{ route('login')}}" class="btn btn-primary">ログイン</a>
                    @endauth
                </div>
            </div>
        </div>
    </div>
</div>
</body>
@endsection
