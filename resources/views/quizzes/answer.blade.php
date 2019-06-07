@extends('layout')

@section('tittle')
Answer
@endsection

@section('content')

<p>解答画面</p>
	<div>
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
	</div>


	<div>
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
	</div>

{{-- ここに○か×のイラストを用意 --}}
@if($_POST['quiz'] == $_POST['answer'])
	{{-- 正解したときの画面 --}}
	<h3>正解！</h3>

@else()
	{{-- 不正解のときの画面 --}}
	<h3>不正解！</h3>

@endif


<p>第1問の正解は...</p>
<p>{{ $_POST['quiz'] }}</p>
<p>あなたの選択肢</p>
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