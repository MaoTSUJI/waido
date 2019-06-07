@extends('layout')

@section('tittle')
QuizList
@endsection

@section('content')

<p>地域：{{ $_POST['area_jpn'] }}</p>

@for($j=0; $j<1; $j++)

	{{-- {{ session_start() }}
	{{ $_SESSION['qnum'] = (string)$j }} --}}
	<div>
		<div id="quiz_page1" class="quiz">
		　		<br>
			<div class="question">
				<img class="flower" src="./img/quiz{{ ($j)+1 }}.png" alt="第1問" width="500px">
				{{-- <p>{{ $area($_POST['area_eng']) }}</p> --}}

				<h1><img class="flower" src="./img/flower_hibiscus.png" alt="ハイビスカス" width="40px">{{ $quizzes[$j]['miyako_'. $_POST['area_eng']] }}<img class="flower" src="./img/flower_hibiscus.png" alt="ハイビスカス" width="40px"></h1>
				<br>
				<br>

				<!-- ↑クイズ -->

				{{-- <a class="hint" href="#">
					<i class="fas fa-comment-alt fa-3x"></i>
					<br>
					<i class="fas fa-lightbulb fa-3x"></i>
						<br>
					<p style="color:black">ヒント</p>
				</a>
				<br>
				<br> --}}

				<!-- ↓四択 -->
					<form action="{{ route('quiz.answer') }}" method="POST" >
						@csrf
						{{-- 選択肢を４つ表示 --}}
						@for($i=0; $i<4; $i++)
							<div></div>
							<input type="radio" name="answer" value="{{ $choices[$j][$i] }}" id="{{ $choices[$j][$i] }}" class="">
							<label for="{{ $choices[$j][$i] }}"></label>{{ $choices[$j][$i] }}

							<br>
						@endfor

						{{-- 選択肢た地域情報を次の画面に返す --}}
						<input type="hidden" name="quiz" value="{{ $quizzes[$j]['japanese'] }}">
						<input type="hidden" name="area_jpn" value="{{ $_POST['area_jpn'] }}">
						<input type="hidden" name="area_id" value="{{ $_POST['area_id'] }}">
						<input type="hidden" name="area_eng" value="{{ $_POST['area_eng'] }}">

						<input type="submit" value="解答" class="cp_btn">
					</form>



					<br>
					<br>

				

				{{-- @if($_SERVER['REQUEST_METHOD'] === 'POST')
					@if($_POST['answer'] == "$quizzes[$_POST['qnum']]['miyako_'. $_POST{'name'}]]")
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

				<form action="POST" class="cp_btn">Next</form>

				<br>
				<br>

		</div>
	</div>
@endfor


@endsection