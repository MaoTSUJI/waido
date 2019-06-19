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
		<span>あなたのみゃーくふつレベルは
			<br>
			<strong>{{ $title }}</strong>
			</span>
			<br>
			<br>
		<img src="./img/{{ $img_url }}" alt="妖怪の写真" width="250px">
			<!-- 正解数に応じて妖怪を自動変更させる -->
			<br>
			<br>
		{{-- クイズスタート画面に遷移 --}}
		<div>
			<form action="{{ route('quiz.quizlist_start') }}" method="post" class="" name="form1">
					@csrf
						<a style="font-size:16px;" class="cp_btn" href="javascript:form1.submit()">もう一度とく</a>
					<input type="hidden" name="area_jpn" value="{{ $_POST['area_jpn'] }}">
					<input type="hidden" name="area_id" value="{{ $_POST['area_id'] }}">
					<input type="hidden" name="area_eng" value="{{ $_POST['area_eng'] }}">
					<input type="hidden" name="qnum" value="0">
			{{-- 	</form> --}}


		<a href="http://twitter.com/share?url=https://waido.herokuapp.com/&text=【みゃーくふつを救え　わいどー】%0aあなたのみゃーくふつレベルは{{ $title }}です。%0a&hashtags=みゃーくふつ, 宮古島方言, 絶滅危機言語, みゃーくふつを救え, わいどー" target="_blank" class="cp_btn">
	{{-- 	<a href="https://twitter.com/intent/tweet?text=テキストテキスト%0a改行もできるし%20スペースも&url=https://www.url.url/&hashtags=タグ,二つ目" rel="nofollow" class="cp_btn"> --}}

			<i class="fab fa-twitter icon"></i>  ツイート</a>
			</form>
		</div>
		{{-- <a href="https://www.facebook.com/sharer/sharer.php?u=https://waido.herokuapp.com/" target="_blank" class="cp_btn"><i class="fab fa-facebook-f icon"></i>  シェア</a> --}}
			<br>
		<a class="go_ranking" href="{{ route('ranking') }}"><i class="fas fa-trophy"></i> ランキングをみる</a>
			<br>
		<a class="town" href="{{ route('quiz.quizlist') }}"><i class="fas fa-map-marker-alt"></i> 地域選択へ戻る</a>
			<br>
			<br>
		</div>
	</div>
@endsection