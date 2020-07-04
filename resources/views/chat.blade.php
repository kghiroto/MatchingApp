@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="chat-container row justify-content-center">
            <div class="chat-area">
                <div class="card">
                <div class="card-header"><p class="m-0">Comment</p></div>
                <div class="card-body chat-card">
                    <div id="comment-data"></div>
                </div>
                </div>
            </div>
        </div>

        <form class="post-form" method="POST" action="{{route('add')}}">
            @csrf
            <div class="comment-container row justify-content-center">
                <div class="input-group comment-area">
                <input  type="hidden" name="room_id" id="room_id" value="{{$room_id}}">
                    <textarea class="form-control" id="comment" name="comment" placeholder="改行(shift + Enter)&#13;&#10;送信(Enter)"
                        aria-label="With textarea" onkeydown="getValue();"></textarea>
                    <button type="submit" id="submit" class="btn btn-outline-primary comment-btn">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>

<script type="text/javascript">
    function getValue() {
        if(event.keyCode==13){
            if(event.shiftKey){
                noop();
            }else{
                document.getElementById('submit').click(); return false
            };
        };
    };
</script>
@endsection

@section('js')
<script src="{{ asset('js/comment.js') }}"></script>
@endsection
