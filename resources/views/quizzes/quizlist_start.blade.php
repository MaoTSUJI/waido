@extends('layout')

@section('tittle')
<<<<<<< HEAD
QuizList_start
=======
 Waido
>>>>>>> a5bb53985171dc28b349508522bed27bc6053efb
@endsection

@section('content')
{{-- ここに中身をかく --}}
<div class=contents>
		<div id="main_box" class="quiz">
			<img class="ribbon" src="img/quiz_start.png" alt="クイズをスタート！" width="500px">
			<br>
			<p>地域：{{ $_GET['area_jpn'] }}</p>

			<form action="{{ route('quiz.quiz_area') }}" method="get" class="">
					@csrf
					<button class="cp_btn">スタート</button>
					<input type="hidden" name="area_jpn" value="{{ $_GET['area_jpn'] }}">
					<input type="hidden" name="area_id" value="{{ $_GET['area_id'] }}">
					<input type="hidden" name="area_eng" value="{{ $_GET['area_eng'] }}">
				</form>


		</div>
	</div>


@endsection