@extends('layout')

@section('tittle')
Answer
@endsection

@section('content')

<p>解答画面</p>
<h1>あい上お</h1>


{{-- ここに○か×のイラストを用意 --}}
{{-- @if($_POST['choices'] == "妹")
<p>正解！</p> --}}
{{-- ○のとき --}}

{{-- @else() --}}
{{-- ×のとき --}}

{{-- @endif --}}

<p>第1問の正解は...</p>
<p>{{ $_POST['answer'] }}</p>



<form action="{{ route('quiz.quiz_area') }}" method="POST" class="btn-flat-dashed-filled">
	<input type="submit" name="answer" value="次の問題">
	@csrf
	<input type="hidden" name="area_jpn" value="{{ $_POST['area_jpn'] }}">
	<input type="hidden" name="area_id" value="{{ $_POST['area_id'] }}">
	<input type="hidden" name="area_eng" value="{{ $_POST['area_eng'] }}">

</form>


{{-- 遷移できない問題は後日解決 --}}


@endsection