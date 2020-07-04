@extends('layouts.app')

@section('content')
<body>

    <div class="text-center">

        <div class="title m-b-md">
            チュートリアル
        </div>
        <div class="movie">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/jvb8pThE8f4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="links m-t-20">
            <a href="{{ route('home') }}">チュートリアルをスキップする</a>
        </div>

    </div>

</body>
@endsection
