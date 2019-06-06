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
				<a href="{{ route('quiz.quizlist_start') }}?name={{ $area->english }} " class="">
					<h3>{{ $area->area }}</h3>
				</a>
@endforeach
	</div>
</div>





@endsection