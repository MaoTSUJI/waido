@extends('layout')

@section('tittle')
QuizList
@endsection

@section('content')
{{-- ここに中身をかく --}}
@foreach($areas as $area)
	<p>{{ $area->id }}</p>
	<p>{{ $area->hiragana }}</p>
	<h3>{{ $area->area }}</h3>
@endforeach

@endsection