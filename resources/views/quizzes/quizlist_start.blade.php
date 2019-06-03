@extends('layout')

@section('tittle')
 Waido
@endsection

@section('content')
{{-- ここに中身をかく --}}

<p>地域：{{ $_GET['name'] }}</p>
<a href="{{ route('quiz.quiz_area') }}?name={{ $_GET['name'] }}">クイズをはじめる</a>

@endsection