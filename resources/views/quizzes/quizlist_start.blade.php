@extends('layout')

@section('tittle')
<<<<<<< HEAD
QuizList_start
=======
 Waido
>>>>>>> a5bb53985171dc28b349508522bed27bc6053efb
@endsection

@section('content')
{{-- ここに中身をかく --}}

<p>地域：{{ $_GET['name'] }}</p>
<a href="{{ route('quiz.quiz_area') }}?name={{ $_GET['name'] }}">クイズをはじめる</a>

@endsection