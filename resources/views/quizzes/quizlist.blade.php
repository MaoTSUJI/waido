@extends('layout')

@section('tittle')
QuizList
@endsection

@section('content')
{{-- ここに中身をかく --}}

{{-- 地域名の表示 --}}
@foreach($areas as $area)
	<a href="{{ route('quiz.quizlist_start') }}?name={{ $area->english }} ">
		<p>{{ $area->id }}</p>
		<p>{{ $area->hiragana }}</p>
		<h3>{{ $area->area }}</h3>
　	</a>

@endforeach

@endsection