@extends('layout')

@section('tittle')
QuizList_start
@endsection

@section('content')
{{-- ここに中身をかく --}}

<div class=contents>
		<div id="main_box" class="quiz3 area">
			<img class="ribbon" src="img/quiz_start.png" alt="クイズをスタート！" width="500px">
			<br>
			<p><font size="5">選択地域：{{ $_POST['area_jpn'] }}</font></p>

			<form action="{{ route('quiz.quiz_area') }}" method="post" class="quiz-start">
				@csrf
				<button class="cp_btn1">スタート</button>
				<input type="hidden" name="area_jpn" value="{{ $_POST['area_jpn'] }}">
				<input type="hidden" name="area_id" value="{{ $_POST['area_id'] }}">
				<input type="hidden" name="area_eng" value="{{ $_POST['area_eng'] }}">
				<input type="hidden" name="qnum" value="0">
				<input type="hidden" name="correct_num" value="0">
				@for($i=0; $i<count($id_array); $i++)
					<input type="hidden" name="idnum_{{ (string)$i }}" value="{{ $id_array[$i] }}">
				@endfor
			</form>

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


			{{-- <form method="post" name="form1" action="{{ route('quiz.quiz_area') }}">
					@csrf
				  <input type="hidden" name="area_jpn" value="{{ $_POST['area_jpn'] }}">
					<input type="hidden" name="area_id" value="{{ $_POST['area_id'] }}">
					<input type="hidden" name="area_eng" value="{{ $_POST['area_eng'] }}">
					<input type="hidden" name="qnum" value="0">
					<input type="hidden" name="correct_num" value="0">
					@for($i=0; $i<count($id_array); $i++)
						<input type="hidden" name="idnum_{{ (string)$i }}" value="{{ $id_array[$i] }}">
					@endfor
				  <a class="cp_btn" href="javascript:form1.submit()">スタート</a>
			</form> --}}


		</div>
</div>


@endsection