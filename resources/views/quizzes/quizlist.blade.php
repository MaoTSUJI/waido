@extends('layout')

@section('tittle')
QuizList
@endsection

@section('content')
{{-- ここに中身をかく --}}
<div id="main_box" class="quiz">
	<div id="main_box" class="quiz">
		<img class="ribbon" src="img/area_select.png" alt="地域選択" width="500px" >
	<div class="map">
	<img class="mioyakomap" src=img/miyakojima_.png alt="マップ" usemap="miyako" >
		<map name="miyako">
				<area shape="" coords="" href="" alt="" onmouseover="" onfocus="" onmouseout="" onfocus="" >
				<area shape="" coords="" href="" alt="" onmouseover="" onfocus="" onmouseout="" onfocus="" >
				<area shape="" coords="" href="" alt="" onmouseover="" onfocus="" onmouseout="" onfocus="" >
		</map>
</div>


</div>
	<div class="text">

@foreach($areas as $area)
				<form action="{{ route('quiz.quizlist_start') }}" method="post" class="btn-flat-dashed-filled">
					@csrf
					<input type="submit" name="area_jpn" value="{{ $area->area }}">
					<input type="hidden" name="area_id" value="{{ $area->id }}">
					<input type="hidden" name="area_eng" value="{{ $area->english }}">
				</form>

@endforeach
	</div>
</div>





@endsection