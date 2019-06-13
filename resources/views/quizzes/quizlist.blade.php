@extends('layout')

@section('tittle')
QuizList
@endsection

@section('content')
{{-- ここに中身をかく --}}

	<div id="main_box" class="area">

		<div>
			<img class="ribbon" src="img/area_select.png" alt="地域選択" width="500px" >
			<br>
			@foreach($areas as $area)
			<form method="post" name="form1" action="{{ route('quiz.quizlist_start') }}" style="display:inline;">
					@csrf
				  <input type="hidden" name="area_jpn" value="{{ $area->area }}">
				  <input type="hidden" name="area_id" value="{{ $area->id }}">
					<input type="hidden" name="area_eng" value="{{ $area->english }}">
				  <a class="cp_btn" href="javascript:form1[{{ $area->id -1 }}].submit()">{{ $area->area }}</a>
			</form>
			@endforeach
			<br>	

			<div class="map">
				<img class="miyakomap" src=img/miyakojima_.png alt="マップ" usemap="miyako" >
				<map name="miyako">
						<area shape="" coords="" href="" alt="" onmouseover="" onfocus="" onmouseout="" onfocus="" >
						<area shape="" coords="" href="" alt="" onmouseover="" onfocus="" onmouseout="" onfocus="" >
						<area shape="" coords="" href="" alt="" onmouseover="" onfocus="" onmouseout="" onfocus="" >
				</map>
			</div>

		</div>

	</div>







@endsection