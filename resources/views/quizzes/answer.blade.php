@extends('layout')

@section('tittle')
Answer
@endsection

@section('content')
<p>解答</p>

{{-- ここに○か×のイラストを用意 --}}
{{-- @if($_POST['choices'] == "妹")
<p>正解！</p> --}}
{{-- ○のとき --}}

{{-- @else() --}}
{{-- ×のとき --}}

{{-- @endif --}}

<p>第1問の正解は...</p>
<p>{{ $_POST['answer'] }}</p>




<a href="{{ route('quiz.quiz_area') }}" class="cp_btn">次の問題</a>
{{-- 遷移できない問題は後日解決 --}}


@endsection