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
			<a href="{{ route('quiz.quiz_area') }}?name={{ $_GET['name'] }}" class="cp_btn">スタート</a>
		</div>
	</div>

<p>地域：{{ $_GET['name'] }}</p>


@endsection