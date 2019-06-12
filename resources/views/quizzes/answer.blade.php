@extends('layout')

@section('tittle')
Answer
@endsection

@section('content')

{{-- ここを非表示にさせたい！ --}}
{{ $qnum }}
<br>
{{ $correct_num }}

{{-- 
<p>解答画面!</p> --}}

{{-- ここに○か×のイラストを用意 --}}
@if($answer == $choose_answer)
	{{-- 正解したときの画面 --}}
	{{-- <h3>正解！</h3> --}}
	<div id="answer" class="kaitou">
			<img src="./img/answer.png" alt="解答" width="500px">
			<br>
			<p>正解</p>
			<img src="./img/quiz_seikai.png" alt="正解">

				<br>
				<br>
			<a href="#" class="cp_btn">次の問題</a>
				<br>
				<br>
		</div>

@else()
	{{-- 不正解のときの画面 --}}
{{-- 	<h3>不正解！</h3> --}}
	<div id="answer" class="kaitou">
			<img src="./img/answer.png" alt="解答" width="500px">
			<br>
			<p>不正解</p>
			<img src="./img/quiz_hazure.png" alt="正解">
				<br>
				<br>
			<a href="#" class="cp_btn">次の問題</a>
				<br>
				<br>
		</div>

@endif


<p>第{{ $qnum }}問の正解は...</p>
<p>{{ $answer }}</p>
<p>あなたの選択肢</p>
<p>{{ $choose_answer	 }}</p>
<p>{{ $id_array[1] }}</p>


@if($qnum < 10 )
	{{-- 問題が1~9問目までの場合、問題画面に戻る --}}
	<form action="{{ route('quiz.quiz_area') }}" method="POST" class="btn-flat-dashed-filled">
		<input type="submit" name="answer" value="次の問題">
		@csrf
		<input type="hidden" name="area_jpn" value="{{ $_POST['area_jpn'] }}">
		<input type="hidden" name="area_id" value="{{ $_POST['area_id'] }}">
		<input type="hidden" name="area_eng" value="{{ $_POST['area_eng'] }}">
		<input type="hidden" name="qnum" value="{{ $qnum }}">
		<input type="hidden" name="correct_num" value="{{ $correct_num }}">
		@for($i=0; $i<10; $i++)
			<input type="hidden" name="idnum_{{ (string)$i }}" value="{{ $id_array[$i] }}">
		@endfor

	</form>

@else
	{{-- 問題が10問目の場合、結果画面に遷移 --}}
	<form action="{{ route('quiz.result') }}" method="POST" class="btn-flat-dashed-filled">
		<input type="submit" name="answer" value="結果発表">
		@csrf
		<input type="hidden" name="area_jpn" value="{{ $_POST['area_jpn'] }}">
		<input type="hidden" name="area_id" value="{{ $_POST['area_id'] }}">
		<input type="hidden" name="area_eng" value="{{ $_POST['area_eng'] }}">
		<input type="hidden" name="qnum" value="{{ $qnum }}">
		<input type="hidden" name="correct_num" value="{{ $correct_num }}">
		
	</form>


@endif




{{-- 遷移できない問題は後日解決 --}}


@endsection