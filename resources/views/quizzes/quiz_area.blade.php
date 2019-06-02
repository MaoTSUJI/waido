@extends('layout')

@section('tittle')
QuizList
@endsection

@section('content')
{{-- ここに中身をかく --}}
	<p>地域：{{ $_GET['name'] }}</p>

	<p>問題：</p>

	<p>選択肢1</p>

@endsection