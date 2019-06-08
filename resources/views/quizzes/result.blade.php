@extends('layout')

@section('tittle')
QuizList
@endsection

@section('content')
{{-- ここに中身をかく --}}
	<div id="main_box" class="result">
			<br>

		<img class="result" src="./img/result.png" alt="結果発表">
			<p class="score">正解率<strong>100</strong>%</p>
			<br>
		<span>あなたは<strong>みゃーくみつ</strong>!</span>
			<br>
			<br>
		<img src="./img/youkai_hitotsume.png" alt="妖怪の写真" width="250px">
			<!-- 正解数に応じて妖怪を自動変更させる -->
			<br>
			<br>
		{{-- クイズスタート画面に遷移 --}}
		<div>
			<form action="{{ route('quiz.quiz_area') }}" method="post" class="">
					@csrf
					<button class="cp_btn">もう一度とく</button>
					<input type="hidden" name="area_jpn" value="{{ $_POST['area_jpn'] }}">
					<input type="hidden" name="area_id" value="{{ $_POST['area_id'] }}">
					<input type="hidden" name="area_eng" value="{{ $_POST['area_eng'] }}">
					<input type="hidden" name="qnum" value="0">
				</form>
		</div>


		<a href="#" class="cp_btn"><i class="fab fa-twitter"></i> シェア</a>
			<br>
			<br>
		<a class="go_ranking" href="#"><i class="fas fa-trophy"></i> ランキングをみる</a>	
			<br>
		<a class="town" href="{{ route('quiz.quizlist') }}"><i class="fas fa-map-marker-alt"></i> 地域選択へ戻る</a>	
			<br>
			<br>
		</div>
	</div>
@endsection