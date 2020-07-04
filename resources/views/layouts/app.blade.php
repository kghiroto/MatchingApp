<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/chat.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style>
        .links > a {
                color: #ffffff;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
                border-bottom: solid 1px #fff;
                padding-top: 10px;
                padding-bottom: 10px;
                margin-left: 10px;
                margin-right: 10px;
            }

        a:hover {
                background-color: rgba(0,0,0,0.3);
        }

        .m-b-md {
                margin-bottom: 30px;
        }

        .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
        }

        .py-5 {
            padding-top: 5rem!important;
            padding-bottom: 1rem!important;
        }

        .top > a {
                color: #ffffff;
								font-size: 18px;
                padding: 0 25px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
								padding-top: 10px;
								padding-bottom: 10px;
								margin-left: 10px;
								margin-right: 10px;
        }

        .top-left {
                position: absolute;
                left: 10px;
                top: 18px;
        }

        .list-top{
            text-align: center;
            font-size: 35px;
        }

        a{
            color: black;
        }

        .content:hover{
            background-color: darkgray;
        }

        .post-form{
            margin-left: auto;
            margin-right: auto;
            width: 85%;
        }

        .content {
                text-align: center;
        }

        .title {
            font-size: 84px;
            color: white;
        }

        .full-height2 {
            height: 82vh;
        }

        .flex-center2 {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref2 {
            position: relative;
        }

        .explan{
            color: white;
        }

        .m-0{
            margin: 0;
        }

        button:focus {
            outline:0;
        }

        .message-list{
            width: 90%;
        }


        .main-link{
            background:none;
            border:none;
            width:40%;
            color: #ffffff;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
            border-bottom: solid 1px #fff;
            padding-top: 10px;
            padding-bottom: 10px;
            margin-left: 10px;
            margin-right: 10px;
        }

        .main-link:hover {
            background-color: rgba(0,0,0,0.3);
        }

        .circle{
            display: inline-block;
            width: 25px;
            height: 25px;
            border-radius: 50%;
            background-color: #28a745;
            text-align:center;
            line-height: 25px;
            color: #ffffff;
        }

        iframe{
            margin-left: auto;
            margin-right: auto;
            margin-top: 15px;
            margin-bottom: 15px;
        }

        .movie{
            background: white;
            width: 47%;
            margin-left: auto;
            margin-right: auto;
        }

        .m-t-20{
            margin-top: 20px;
        }

    </style>
</head>

<body  style="background-image: url('/img/background.jpg')" >
<div class="flex-center position-ref full-height">
            <div class="top-left top">
                <a href="{{ url('/') }}">そくたつ</a>
            </div>
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="/" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                            <!-- <div class="circle">1</div> -->
                            <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                ログアウト
                            </a>
                            <a class="dropdown-item" href="{{ route('list') }}">
                                依頼リスト
                            </a>
                            <a class="dropdown-item" href="{{ route('message-list') }}">
                                メッセージリスト
                                <!-- <div class="circle">1</div> -->
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    @else
                        <a href="{{ route('login') }}">ログイン</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">新規登録</a>
                        @endif
                    @endauth
                </div>
            @endif

        <main class="py-5">
            @yield('content')
        </main>
    </div>
    @yield('js')
</body>
</html>
