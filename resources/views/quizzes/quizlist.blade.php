@extends('layout')

@section('tittle')
QuizList
@endsection

@section('content')
{{-- ここに中身をかく --}}
<div id="main_box" class="quiz">
		<img class="ribbon" src="img/area_select.png" alt="地域選択" width="500px">
	<div class="text">

@foreach($areas as $area)
				<a href="{{ route('quiz.quizlist_start') }}?name={{ $area->english }} " class="">
					<h3>{{ $area->area }}</h3>
				</a>
@endforeach
	</div>
</div>





@endsection