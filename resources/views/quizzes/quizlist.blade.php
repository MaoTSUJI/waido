@extends('layout')

@section('tittle')
QuizList
@endsection

@section('content')
{{-- ここに中身をかく --}}

	<div id="main_box" class="area">

		<div>
			<img class="ribbon" src="img/area_select.png" alt="地域選択" width="500px">
			<br>
			

			<br>	


			<div class="map" style="position: relative;">

{{-- 				<img class="mb-3 miyakomap" src=img/miyakomap.png alt="マップ" usemap="miyako" width="80%" >
				<map name="miyako">
						<area shape="" coords="" href="" alt="" onmouseover="" onfocus="" onmouseout="" onfocus="" >
						<area shape="" coords="" href="" alt="" onmouseover="" onfocus="" onmouseout="" onfocus="" >
						<area shape="" coords="" href="" alt="" onmouseover="" onfocus="" onmouseout="" onfocus="" >
				</map> --}}

				<img class="mb-3 miyakomap" src=img/miyakomap.png alt="マップ" usemap="#ImageMap" width="80%" >
				<map name="ImageMap">
					<area shape="rect" coords="210,47,728,420" href="#" alt="" />

					<area shape="rect" coords="129,540,270,667" href="#" alt="" />
					<area shape="rect" coords="408,420,901,595" href="#" alt="" />
				</map>
				
					@foreach($areas as $area)
						<div style="position: absolute; top: 30px; left: {{ ($area->id-1)*200+100 }}px;">
							<form method="post" name="form1" action="{{ route('quiz.quizlist_start') }}" style="display:inline;">
								@csrf
							  <input type="hidden" name="area_jpn" value="{{ $area->area }}">
							  <input type="hidden" name="area_id" value="{{ $area->id }}">
								<input type="hidden" name="area_eng" value="{{ $area->english }}">
							  <a class="cp_btn" href="javascript:form1[{{ $area->id -1 }}].submit()">{{ $area->area }}</a>
								</form>
						</div>
					@endforeach
				


			</div>

		</div>

	</div>







@endsection