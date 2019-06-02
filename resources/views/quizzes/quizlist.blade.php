@extends('layout')

@section('tittle')
QuizList
@endsection

@section('content')
{{-- ここに中身をかく --}}
@foreach($areas as $area)
	<a href="{{ route() }}">
		<p>{{ $area->id }}</p>
		<p>{{ $area->hiragana }}</p>
		<h3>{{ $area->area }}</h3>
　	</a>

@endforeach

@endsection