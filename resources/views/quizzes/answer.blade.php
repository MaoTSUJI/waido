@extends('layout')

@section('tittle')
Answer
@endsection

@section('content')
	<div>
		<div id="answer" class="kaitou">
			<img src="./img/answer.png" alt="解答" width="500px">
			<br>
			<p>正解</p>
			<img src="./img/quiz_seikai.png" alt="正解">

				<br>
				<br>
			<a href="#" class="cp_btn">次の問題</a>
				<br>
				<br>
		</div>
	</div>


	<div>
		<div id="answer" class="kaitou">
			<img src="./img/answer.png" alt="解答" width="500px">
			<br>
			<p>不正解</p>
			<img src="./img/quiz_hazure.png" alt="正解">
				<br>
				<br>
			<a href="#" class="cp_btn">次の問題</a>
				<br>
				<br>
			
		</div>
	</div>


@endsection