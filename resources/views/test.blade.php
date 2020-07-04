@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <!-- <form type="hidden" method="POST" action="{{ route('room') }}" onSubmit="return check()">
        {{ csrf_field() }}
            <p>お名前：<input type="text" name="field1" size="25"></p>
            <input type="hidden" name="field2" value="012345">
            <a type="submit">送信</a>
        </form> -->

        <form method="post" name="form1" action="{{ route('room') }}" onSubmit="return check()">
        {{ csrf_field() }}
            <input style="display:none;" name="field2" value="名前">
            <!-- <a href="javascript:form1.submit()">リンク名</a> -->
            <button type="submit" style="background:none; border:none;">
                <p style="display:none;" id="card-text">
                    お客様名<br>
                    荷物サイズ<br>
                    お届け元<br>
                    お届け先<br>
                    お届け希望日<br>
                    備考
                </p>
            </button>
        </form>
    </div>
</div>

<script type="text/javascript">
function check(){

	if(window.confirm('送信してよろしいですか？')){ // 確認ダイアログを表示

		return true; // 「OK」時は送信を実行

	}
	else{ // 「キャンセル」時の処理

		window.alert('キャンセルされました'); // 警告ダイアログを表示
		return false; // 送信を中止

	}
}
</script>
