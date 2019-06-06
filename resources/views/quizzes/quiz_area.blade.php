@extends('layout')

@section('tittle')
QuizList
@endsection

@section('content')

@for($j=0; $j<10; $j++)
	<div>
		<div id="quiz_page1" class="quiz">
		　		<br>
			<div class="question">
				<img class="flower" src="./img/quiz1.png" alt="第1問" width="500px">
				{{-- <p>{{ $area($_GET['name']) }}</p> --}}
				<p>地域：{{ $_GET['name'] }}</p>
				<h1><img class="flower" src="./img/flower_hibiscus.png" alt="ハイビスカス" width="40px">{{ $quizzes[$j]['miyako_'. $_GET{'name'}] }}<img class="flower" src="./img/flower_hibiscus.png" alt="ハイビスカス" width="40px"></h1>
				<br>
				<br>

				<!-- ↑クイズ -->
				<a class="hint" href=""><i class="fas fa-lightbulb fa-3x"></i><br><p style="color:black">ヒント</p></a>
				<br>
				<br>
				<!-- ↓四択 -->
				@for($i=0; $i<4; $i++)
					<a href="{{ route('quiz.answer') }}" class="btn-flat-dashed-filled">{{ $choices[$j][$i] }}</a>
						<br>
						<br>
				@endfor
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