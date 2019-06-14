@extends('layout')

@section('tittle')
QuizList
@endsection

@section('content')

{{-- 【質問！】この行を非表示にしたい！ --}}

<body>

		<div id="quiz_page1" class="quiz">
		　		<br>
			<div class="question">
				<img class="flower" src="./img/quiz{{ ($qnum)+1 }}.png" alt="第1問" width="500px">
				{{-- <p>{{ $area($_POST['area_eng']) }}</p> --}}

				<h2 class="quizword">
					<img class="flower" src="./img/flower_hibiscus.png" alt="ハイビスカス" width="40px">
					{{ $quiz }}
					<img class="flower" src="./img/flower_hibiscus.png" alt="ハイビスカス" width="40px">
				</h2>

				{{-- <a class="hint" href="#">
					<i class="fas fa-comment-alt fa-3x"></i>
					<br>
					<i class="fas fa-lightbulb fa-3x"></i>
						<br>
					<p style="color:black">ヒント</p>
				</a>	--}}

				<!-- ↓四択 -->
					<form action="{{ route('quiz.answer') }}" method="POST" class="form" name="form1">
						@csrf
						{{-- 選択肢を４つ表示 --}}
						<div class="four-choices">
								@for($i=0; $i<4; $i++)
									<input type="radio" name="choose_answer" value="{{ $choices[$i] }}" id="{{ $choices[$i] }}" class="">
									<label for="{{ $choices[$i] }}" class="choice">{{ $choices[$i] }}</label>
								@endfor
						</div>

						<a style="font-size:16px;" class="cp_btn to-answer" href="javascript:form1.submit()">解答</a>

						{{-- 選択肢た地域情報を次の画面に返す --}}
						<input type="hidden" name="quiz" value="{{ $quiz }}">
						<input type="hidden" name="answer" value="{{ $answer }}">
						<input type="hidden" name="area_jpn" value="{{ $_POST['area_jpn'] }}">
						<input type="hidden" name="area_id" value="{{ $_POST['area_id'] }}">
						<input type="hidden" name="area_eng" value="{{ $_POST['area_eng'] }}">
						<input type="hidden" name="qnum" value="{{ $qnum }}">
						<input type="hidden" name="correct_num" value="{{ $correct_num }}" >
						@for($i=0; $i<10; $i++)
							<input type="hidden" name="idnum_{{ (string)$i }}" value="{{ $id_array[$i] }}">
						@endfor

					</form>

			</div>

			<!-- ハイビスカスを使って問題数を表す -->
			<div class="hibiscus">
				@for($j=1; $j<=$qnum; $j++)
					<img class="hibiscus1" src="./img/flower_hibiscus.png" alt="問題数" width="40px">
				@endfor
				@for($k=1; $k<=(10-$qnum); $k++)
					<img class="hibiscus2" src="./img/flower_hibiscus.png" alt="問題数" width="40px">
				@endfor
			</div>

		</div>


</body>

@endsection