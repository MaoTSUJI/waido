@extends('layout')

@section('tittle')
QuizList
@endsection

@section('content')
{{-- ここに中身をかく --}}


	<div id="main_box" class="result">
			<br>

		<img class="result" src="./img/result.png" alt="結果発表">
			<p class="score">正解率<strong>{{ $correct_num * 10 }}</strong>%</p>
			<br>
		<span>あなたは
			<strong>{{ $title }}</strong>
			!</span>
			<br>
			<br>
			<p>{{ $img_url }}</p>
		<img src="./img/{{ $img_url }}" alt="妖怪の写真" width="250px">
			<!-- 正解数に応じて妖怪を自動変更させる -->
			<br>
			<br>
		{{-- クイズスタート画面に遷移 --}}
		<div>
			<form action="{{ route('quiz.quizlist_start') }}" method="post" class="">
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
		<a class="go_ranking" href="{{ route('ranking') }}"><i class="fas fa-trophy"></i> ランキングをみる</a>
			<br>
		<a class="town" href="{{ route('quiz.quizlist') }}"><i class="fas fa-map-marker-alt"></i> 地域選択へ戻る</a>
			<br>
			<br>
		</div>
	</div>
@endsection