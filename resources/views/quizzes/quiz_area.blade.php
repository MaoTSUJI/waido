@extends('layout')

@section('tittle')
QuizList
@endsection

@section('content')

<p>地域：{{ $_GET['area_jpn'] }}</p>

@for($j=0; $j<1; $j++)

	{{-- {{ session_start() }}
	{{ $_SESSION['qnum'] = (string)$j }} --}}
	<div>
		<div id="quiz_page1" class="quiz">
		　		<br>
			<div class="question">
				<img class="flower" src="./img/quiz{{ ($j)+1 }}.png" alt="第1問" width="500px">
				{{-- <p>{{ $area($_GET['area_eng']) }}</p> --}}

				<h1><img class="flower" src="./img/flower_hibiscus.png" alt="ハイビスカス" width="40px">{{ $quizzes[$j]['miyako_'. $_GET['area_eng']] }}<img class="flower" src="./img/flower_hibiscus.png" alt="ハイビスカス" width="40px"></h1>
				<br>
				<br>

				<!-- ↑クイズ -->
				<a class="hint" href="#"><i class="fas fa-lightbulb fa-3x"></i><br><p style="color:black">ヒント</p></a>
				<br>
				<br>
				<!-- ↓四択 -->
				@for($i=0; $i<4; $i++)
					<form action="{{ route('quiz.answer') }}" method="POST" class="btn-flat-dashed-filled">
						<input type="submit" name="answer" value="{{ $choices[$j][$i] }}">
						@csrf
{{-- 						<input type="hidden" name="qnum" value="{{ $j }}"> --}}
					</form>
					<br>
					<br>
				@endfor

				{{-- @if($_SERVER['REQUEST_METHOD'] === 'POST')
					@if($_POST['answer'] == "$quizzes[$_POST['qnum']]['miyako_'. $_GET{'name'}]]")
					<p>正解！</p>
					@endif
				@endif --}}

			</div>
			<!-- ハイビスカスを使って問題数を表す -->
			<div class="hibiscus">
				<img class="hibiscus1" src="./img/flower_hibiscus.png" alt="問題数" width="40px">
				<img class="hibiscus2" src="./img/flower_hibiscus.png" alt="問題数" width="40px">
				<img class="hibiscus2" src="./img/flower_hibiscus.png" alt="問題数" width="40px">
				<img class="hibiscus2" src="./img/flower_hibiscus.png" alt="問題数" width="40px">
				<img class="hibiscus2" src="./img/flower_hibiscus.png" alt="問題数" width="40px">
				<img class="hibiscus2" src="./img/flower_hibiscus.png" alt="問題数" width="40px">
				<img class="hibiscus2" src="./img/flower_hibiscus.png" alt="問題数" width="40px">
				<img class="hibiscus2" src="./img/flower_hibiscus.png" alt="問題数" width="40px">
				<img class="hibiscus2" src="./img/flower_hibiscus.png" alt="問題数" width="40px">
				<img class="hibiscus2" src="./img/flower_hibiscus.png" alt="問題数" width="40px">

			</div>

					<br>

				<a href="#" class="cp_btn">次の問題</a>
				<br>
				<br>

		</div>
	</div>
@endfor


@endsection