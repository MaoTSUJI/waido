@extends('layout')

@section('tittle')
QuizList
@endsection

@section('content')
{{-- ここに中身をかく --}}
	<p>地域：{{ $_GET['name'] }}</p>

	<p>問題：{{ $quiz['miyako_'. $_GET{'name'}] }}</p>

	<p>選択肢1	: {{ $quiz['japanese'] }}</p>
	<p>選択肢2	: </p>
	<p>選択肢3	: </p>
	<p>選択肢4	: </p>

@endsection