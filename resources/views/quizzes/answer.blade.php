@extends('layout')

@section('tittle')
Answer
@endsection

@section('content')

{{-- ここに○か×のイラストを用意 --}}
@if($answer == $choose_answer)
	{{-- 正解したときの画面 --}}
	{{-- <h3>正解！</h3> --}}
	<div id="answer" class="kaitou area">
			<img src="./img/answer.png" alt="解答" width="500px">
			<br>
			<p>正解</p>
			<img src="./img/quiz_seikai.png" alt="正解">

				<br>
			<p>第{{ $qnum }}問の正解は...</p>
			<p>{{ $answer }}</p>
			<p>あなたの選択肢</p>
			<p>{{ $choose_answer	 }}</p>

				<br>

			{{--  --}}
			@if($qnum < 10 )
					{{-- 問題が1~9問目までの場合、問題画面に戻る --}}
					<form action="{{ route('quiz.quiz_area') }}" method="POST" class="btn-flat-dashed-filled" name="form1">
						<a style="font-size:16px;" class="cp_btn" href="javascript:form1.submit()">次の問題</a>
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
					<form action="{{ route('quiz.result') }}" method="POST" class="btn-flat-dashed-filled" name="form1">
						<a style="font-size:16px;" class="cp_btn" href="javascript:form1.submit()">結果発表</a>
						@csrf
						<input type="hidden" name="area_jpn" value="{{ $_POST['area_jpn'] }}">
						<input type="hidden" name="area_id" value="{{ $_POST['area_id'] }}">
						<input type="hidden" name="area_eng" value="{{ $_POST['area_eng'] }}">
						<input type="hidden" name="qnum" value="{{ $qnum }}">
						<input type="hidden" name="correct_num" value="{{ $correct_num }}">
					</form>
				@endif


				<br>
				<br>
		</div>

@else()
	{{-- 不正解のときの画面 --}}
{{-- 	<h3>不正解！</h3> --}}
	<div id="answer" class="kaitou area">
			<img src="./img/answer.png" alt="解答" width="500px">
			<br>
			<p>不正解</p>
			<img src="./img/quiz_hazure.png" alt="正解">
				<br>
				<p>第{{ $qnum }}問の正解は...</p>
			<p>{{ $answer }}</p>
			<p>あなたの選択肢</p>
			<p>{{ $choose_answer	 }}</p>
				<br>
			@if($qnum < 10 )
					{{-- 問題が1~9問目までの場合、問題画面に戻る --}}
					<form action="{{ route('quiz.quiz_area') }}" method="POST" class="" name="form1">
						<a style="font-size:16px;" class="cp_btn" href="javascript:form1.submit()">次の問題</a>
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
					<form action="{{ route('quiz.result') }}" method="POST" class="" name="form1">
						<a style="font-size:16px;" class="cp_btn" href="javascript:form1.submit()">結果発表</a>
						@csrf
						<input type="hidden" name="area_jpn" value="{{ $_POST['area_jpn'] }}">
						<input type="hidden" name="area_id" value="{{ $_POST['area_id'] }}">
						<input type="hidden" name="area_eng" value="{{ $_POST['area_eng'] }}">
						<input type="hidden" name="qnum" value="{{ $qnum }}">
						<input type="hidden" name="correct_num" value="{{ $correct_num }}">
					</form>
				@endif


				<br>
				<br>
		</div>

@endif


@endsection