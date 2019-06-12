@extends('layout')

@section('tittle')
QuizList
@endsection

@section('content')
{{-- ここに中身をかく --}}

	<div id="main_box" class="area">

		<div>
			<img class="ribbon" src="img/area_select.png" alt="地域選択" width="500px" >
			<form action="{{ route('quiz.quizlist_start') }}" method="post" class="">
					@csrf
					@foreach($areas as $area)
							<label for="{{ $area->area }}" class="cp_btn">
								<input type="submit" name="area_jpn" id="{{ $area->area }}" value="{{ $area->area }}">
							</label>
							<input type="hidden" name="area_id" value="{{ $area->id }}">
							<input type="hidden" name="area_eng" value="{{ $area->english }}">
					@endforeach
			</form>
		
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