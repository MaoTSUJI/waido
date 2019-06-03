@extends('layout')

@section('tittle')
QuizList
@endsection

@section('content')

<div>
		<div id="quiz_page1" class="quiz">
		　		<br>
			<div class="question">
				<img class="flower" src="./img/quiz1.png" alt="第1問" width="500px">
				<p>地域：{{ $_GET['name'] }}</p>
				<h1><img class="flower" src="./img/flower_hibiscus.png" alt="ハイビスカス" width="40px">{{ $quizzes[1]['miyako_'. $_GET{'name'}] }}<img class="flower" src="./img/flower_hibiscus.png" alt="ハイビスカス" width="40px"></h1>
				<br>
				<br>

				<!-- ↑クイズ -->
				<a class="hint" href="#"><i class="fas fa-lightbulb fa-3x"></i><br><p style="color:black">ヒント</p></a>
				<br>
				<br>
				<!-- ↓四択 -->
				<a href="#" class="btn-flat-dashed-filled">{{ $quizzes[1]['japanese'] }}</a>
					<br>
					<br>
				<a href="#" class="btn-flat-dashed-filled">{{ $quizzes[1]['japanese'] }}</a>
					<br>
					<br>
				<a href="#" class="btn-flat-dashed-filled">{{ $quizzes[1]['japanese'] }}</a>
					<br>
					<br>
				<a href="#" class="btn-flat-dashed-filled">{{ $quizzes[1]['japanese'] }}</a>
					<br>
					<br>
			</div>
			<!-- ハイビスカスを使って問題数を表す -->
			<div class="hibiscus">
				<img class="hibiscus1" src="./img/flower_hibiscus.png" alt="問題数" width="40px">
				<img class="hibiscus2" src="./img/flower_hibiscus.png" alt="問題数" width="40px">
				<img class="hibiscus2" src="./img/flower_hibiscus.png" alt="問題数" width="40px">
				<img class="hibiscus2" src="./img/flower_hibiscus.png" alt="問題数" width="40px">
				<img class="hibiscus2" src="./img/flower_hibiscus.png" alt="問題数" width="40px">
				<img class="hibiscus2" src="./img/flower_hibiscus.png" alt="問題数" width="40px">
				<img class="hibiscus2" src="./img/flower_hibiscus.png" alt="問題数" width="40px">
				<img class="hibiscus2" src="./img/flower_hibiscus.png" alt="問題数" width="40px">
				<img class="hibiscus2" src="./img/flower_hibiscus.png" alt="問題数" width="40px">
				<img class="hibiscus2" src="./img/flower_hibiscus.png" alt="問題数" width="40px">


			</div>


					<br>
				<a href="#" class="cp_btn">次の問題</a>
				<br>
				<br>


		</div>
</div>
<div>
		<div id="quiz_page2" class="quiz">
		　		<br>
			<div class="question">
				<img class="flower" src="./img/quiz2.png" alt="第2問" width="500px">
				<p>地域：{{ $_GET['name'] }}</p>
				<h1><img class="flower" src="./img/flower_hibiscus.png" alt="ハイビスカス" width="40px">{{ $quizzes[1]['miyako_'. $_GET{'name'}] }}<img class="flower" src="./img/flower_hibiscus.png" alt="ハイビスカス" width="40px"></h1>
				<br>
				<br>

				<!-- ↑クイズ -->
				<a class="hint" href="#"><i class="fas fa-lightbulb fa-3x"></i><br><p style="color:black">ヒント</p></a>
				<br>
				<br>
				<!-- ↓四択 -->
				<a href="#" class="btn-flat-dashed-filled">{{ $quizzes[1]['japanese'] }}</a>
					<br>
					<br>
				<a href="#" class="btn-flat-dashed-filled">{{ $quizzes[1]['japanese'] }}</a>
					<br>
					<br>
				<a href="#" class="btn-flat-dashed-filled">{{ $quizzes[1]['japanese'] }}</a>
					<br>
					<br>
				<a href="#" class="btn-flat-dashed-filled">{{ $quizzes[1]['japanese'] }}</a>
					<br>
					<br>
			</div>
			<!-- ハイビスカスを使って問題数を表す -->
			<div class="hibiscus">
				<img class="hibiscus1" src="./img/flower_hibiscus.png" alt="問題数" width="40px">
				<img class="hibiscus1" src="./img/flower_hibiscus.png" alt="問題数" width="40px">
				<img class="hibiscus2" src="./img/flower_hibiscus.png" alt="問題数" width="40px">
				<img class="hibiscus2" src="./img/flower_hibiscus.png" alt="問題数" width="40px">
				<img class="hibiscus2" src="./img/flower_hibiscus.png" alt="問題数" width="40px">
				<img class="hibiscus2" src="./img/flower_hibiscus.png" alt="問題数" width="40px">
				<img class="hibiscus2" src="./img/flower_hibiscus.png" alt="問題数" width="40px">
				<img class="hibiscus2" src="./img/flower_hibiscus.png" alt="問題数" width="40px">
				<img class="hibiscus2" src="./img/flower_hibiscus.png" alt="問題数" width="40px">
				<img class="hibiscus2" src="./img/flower_hibiscus.png" alt="問題数" width="40px">


			</div>


					<br>
				<a href="#" class="cp_btn">前の問題に戻る</a>
				<a href="#" class="cp_btn">次の問題</a>
					<br>
					<br>


		</div>
</div>

<div>
		<div id="quiz_page3" class="quiz">
		　		<br>
			<div class="question">
				<img class="flower" src="./img/quiz3.png" alt="第3問" width="500px">
				<p>地域：{{ $_GET['name'] }}</p>
				<h1><img class="flower" src="./img/flower_hibiscus.png" alt="ハイビスカス" width="40px">{{ $quizzes[1]['miyako_'. $_GET{'name'}] }}<img class="flower" src="./img/flower_hibiscus.png" alt="ハイビスカス" width="40px"></h1>
				<br>
				<br>

				<!-- ↑クイズ -->
				<a class="hint" href="#"><i class="fas fa-lightbulb fa-3x"></i><br><p style="color:black">ヒント</p></a>
				<br>
				<br>
				<!-- ↓四択 -->
				<a href="#" class="btn-flat-dashed-filled">{{ $quizzes[1]['japanese'] }}</a>
					<br>
					<br>
				<a href="#" class="btn-flat-dashed-filled">{{ $quizzes[1]['japanese'] }}</a>
					<br>
					<br>
				<a href="#" class="btn-flat-dashed-filled">{{ $quizzes[1]['japanese'] }}</a>
					<br>
					<br>
				<a href="#" class="btn-flat-dashed-filled">{{ $quizzes[1]['japanese'] }}</a>
					<br>
					<br>
			</div>
			<!-- ハイビスカスを使って問題数を表す -->
			<div class="hibiscus">
				<img class="hibiscus1" src="./img/flower_hibiscus.png" alt="問題数" width="40px">
				<img class="hibiscus1" src="./img/flower_hibiscus.png" alt="問題数" width="40px">
				<img class="hibiscus1" src="./img/flower_hibiscus.png" alt="問題数" width="40px">
				<img class="hibiscus2" src="./img/flower_hibiscus.png" alt="問題数" width="40px">
				<img class="hibiscus2" src="./img/flower_hibiscus.png" alt="問題数" width="40px">
				<img class="hibiscus2" src="./img/flower_hibiscus.png" alt="問題数" width="40px">
				<img class="hibiscus2" src="./img/flower_hibiscus.png" alt="問題数" width="40px">
				<img class="hibiscus2" src="./img/flower_hibiscus.png" alt="問題数" width="40px">
				<img class="hibiscus2" src="./img/flower_hibiscus.png" alt="問題数" width="40px">
				<img class="hibiscus2" src="./img/flower_hibiscus.png" alt="問題数" width="40px">


			</div>


					<br>
				<a href="#" class="cp_btn">前の問題に戻る</a>
				<a href="#" class="cp_btn">次の問題</a>
					<br>
					<br>
		</div>
</div>

<div>
		<div id="quiz_page4" class="quiz">
		　		<br>
			<div class="question">
				<img class="flower" src="./img/quiz4.png" alt="第4問" width="500px">
				<p>地域：{{ $_GET['name'] }}</p>
				<h1><img class="flower" src="./img/flower_hibiscus.png" alt="ハイビスカス" width="40px">{{ $quizzes[1]['miyako_'. $_GET{'name'}] }}<img class="flower" src="./img/flower_hibiscus.png" alt="ハイビスカス" width="40px"></h1>
				<br>
				<br>

				<!-- ↑クイズ -->
				<a class="hint" href="#"><i class="fas fa-lightbulb fa-3x"></i><br><p style="color:black">ヒント</p></a>
				<br>
				<br>
				<!-- ↓四択 -->
				<a href="#" class="btn-flat-dashed-filled">{{ $quizzes[1]['japanese'] }}</a>
					<br>
					<br>
				<a href="#" class="btn-flat-dashed-filled">{{ $quizzes[1]['japanese'] }}</a>
					<br>
					<br>
				<a href="#" class="btn-flat-dashed-filled">{{ $quizzes[1]['japanese'] }}</a>
					<br>
					<br>
				<a href="#" class="btn-flat-dashed-filled">{{ $quizzes[1]['japanese'] }}</a>
					<br>
					<br>
			</div>
			<!-- ハイビスカスを使って問題数を表す -->
			<div class="hibiscus">
				<img class="hibiscus1" src="./img/flower_hibiscus.png" alt="問題数" width="40px">
				<img class="hibiscus1" src="./img/flower_hibiscus.png" alt="問題数" width="40px">
				<img class="hibiscus1" src="./img/flower_hibiscus.png" alt="問題数" width="40px">
				<img class="hibiscus1" src="./img/flower_hibiscus.png" alt="問題数" width="40px">
				<img class="hibiscus2" src="./img/flower_hibiscus.png" alt="問題数" width="40px">
				<img class="hibiscus2" src="./img/flower_hibiscus.png" alt="問題数" width="40px">
				<img class="hibiscus2" src="./img/flower_hibiscus.png" alt="問題数" width="40px">
				<img class="hibiscus2" src="./img/flower_hibiscus.png" alt="問題数" width="40px">
				<img class="hibiscus2" src="./img/flower_hibiscus.png" alt="問題数" width="40px">
				<img class="hibiscus2" src="./img/flower_hibiscus.png" alt="問題数" width="40px">


			</div>


					<br>
				<a href="#" class="cp_btn">前の問題に戻る</a>
				<a href="#" class="cp_btn">次の問題</a>
					<br>
					<br>
		</div>
</div>

<div>
		<div id="quiz_page5" class="quiz">
		　		<br>
			<div class="question">
				<img class="flower" src="./img/quiz5.png" alt="第5問" width="500px">
				<p>地域：{{ $_GET['name'] }}</p>
				<h1><img class="flower" src="./img/flower_hibiscus.png" alt="ハイビスカス" width="40px">{{ $quizzes[1]['miyako_'. $_GET{'name'}] }}<img class="flower" src="./img/flower_hibiscus.png" alt="ハイビスカス" width="40px"></h1>
				<br>
				<br>

				<!-- ↑クイズ -->
				<a class="hint" href="#"><i class="fas fa-lightbulb fa-3x"></i><br><p style="color:black">ヒント</p></a>
				<br>
				<br>
				<!-- ↓四択 -->
				<a href="#" class="btn-flat-dashed-filled">{{ $quizzes[1]['japanese'] }}</a>
					<br>
					<br>
				<a href="#" class="btn-flat-dashed-filled">{{ $quizzes[1]['japanese'] }}</a>
					<br>
					<br>
				<a href="#" class="btn-flat-dashed-filled">{{ $quizzes[1]['japanese'] }}</a>
					<br>
					<br>
				<a href="#" class="btn-flat-dashed-filled">{{ $quizzes[1]['japanese'] }}</a>
					<br>
					<br>
			</div>
			<!-- ハイビスカスを使って問題数を表す -->
			<div class="hibiscus">
				<img class="hibiscus1" src="./img/flower_hibiscus.png" alt="問題数" width="40px">
				<img class="hibiscus1" src="./img/flower_hibiscus.png" alt="問題数" width="40px">
				<img class="hibiscus1" src="./img/flower_hibiscus.png" alt="問題数" width="40px">
				<img class="hibiscus1" src="./img/flower_hibiscus.png" alt="問題数" width="40px">
				<img class="hibiscus1" src="./img/flower_hibiscus.png" alt="問題数" width="40px">
				<img class="hibiscus2" src="./img/flower_hibiscus.png" alt="問題数" width="40px">
				<img class="hibiscus2" src="./img/flower_hibiscus.png" alt="問題数" width="40px">
				<img class="hibiscus2" src="./img/flower_hibiscus.png" alt="問題数" width="40px">
				<img class="hibiscus2" src="./img/flower_hibiscus.png" alt="問題数" width="40px">
				<img class="hibiscus2" src="./img/flower_hibiscus.png" alt="問題数" width="40px">


			</div>


					<br>
				<a href="#" class="cp_btn">前の問題に戻る</a>
				<a href="#" class="cp_btn">次の問題</a>
					<br>
					<br>
		</div>
</div>

<div>
		<div id="quiz_page6" class="quiz">
		　		<br>
			<div class="question">
				<img class="flower" src="./img/quiz6.png" alt="第6問" width="500px">
				<p>地域：{{ $_GET['name'] }}</p>
				<h1><img class="flower" src="./img/flower_hibiscus.png" alt="ハイビスカス" width="40px">{{ $quizzes[1]['miyako_'. $_GET{'name'}] }}<img class="flower" src="./img/flower_hibiscus.png" alt="ハイビスカス" width="40px"></h1>
				<br>
				<br>

				<!-- ↑クイズ -->
				<a class="hint" href="#"><i class="fas fa-lightbulb fa-3x"></i><br><p style="color:black">ヒント</p></a>
				<br>
				<br>
				<!-- ↓四択 -->
				<a href="#" class="btn-flat-dashed-filled">{{ $quizzes[1]['japanese'] }}</a>
					<br>
					<br>
				<a href="#" class="btn-flat-dashed-filled">{{ $quizzes[1]['japanese'] }}</a>
					<br>
					<br>
				<a href="#" class="btn-flat-dashed-filled">{{ $quizzes[1]['japanese'] }}</a>
					<br>
					<br>
				<a href="#" class="btn-flat-dashed-filled">{{ $quizzes[1]['japanese'] }}</a>
					<br>
					<br>
			</div>
			<!-- ハイビスカスを使って問題数を表す -->
			<div class="hibiscus">
				<img class="hibiscus1" src="./img/flower_hibiscus.png" alt="問題数" width="40px">
				<img class="hibiscus1" src="./img/flower_hibiscus.png" alt="問題数" width="40px">
				<img class="hibiscus1" src="./img/flower_hibiscus.png" alt="問題数" width="40px">
				<img class="hibiscus1" src="./img/flower_hibiscus.png" alt="問題数" width="40px">
				<img class="hibiscus1" src="./img/flower_hibiscus.png" alt="問題数" width="40px">
				<img class="hibiscus1" src="./img/flower_hibiscus.png" alt="問題数" width="40px">
				<img class="hibiscus2" src="./img/flower_hibiscus.png" alt="問題数" width="40px">
				<img class="hibiscus2" src="./img/flower_hibiscus.png" alt="問題数" width="40px">
				<img class="hibiscus2" src="./img/flower_hibiscus.png" alt="問題数" width="40px">
				<img class="hibiscus2" src="./img/flower_hibiscus.png" alt="問題数" width="40px">


			</div>


					<br>
				<a href="#" class="cp_btn">前の問題に戻る</a>
				<a href="#" class="cp_btn">次の問題</a>
					<br>
					<br>
		</div>
</div>

<div>
		<div id="quiz_page7" class="quiz">
		　		<br>
			<div class="question">
				<img class="flower" src="./img/quiz7.png" alt="第7問" width="500px">
				<p>地域：{{ $_GET['name'] }}</p>
				<h1><img class="flower" src="./img/flower_hibiscus.png" alt="ハイビスカス" width="40px">{{ $quizzes[1]['miyako_'. $_GET{'name'}] }}<img class="flower" src="./img/flower_hibiscus.png" alt="ハイビスカス" width="40px"></h1>
				<br>
				<br>

				<!-- ↑クイズ -->
				<a class="hint" href="#"><i class="fas fa-lightbulb fa-3x"></i><br><p style="color:black">ヒント</p></a>
				<br>
				<br>
				<!-- ↓四択 -->
				<a href="#" class="btn-flat-dashed-filled">{{ $quizzes[1]['japanese'] }}</a>
					<br>
					<br>
				<a href="#" class="btn-flat-dashed-filled">{{ $quizzes[1]['japanese'] }}</a>
					<br>
					<br>
				<a href="#" class="btn-flat-dashed-filled">{{ $quizzes[1]['japanese'] }}</a>
					<br>
					<br>
				<a href="#" class="btn-flat-dashed-filled">{{ $quizzes[1]['japanese'] }}</a>
					<br>
					<br>
			</div>
			<!-- ハイビスカスを使って問題数を表す -->
			<div class="hibiscus">
				<img class="hibiscus1" src="./img/flower_hibiscus.png" alt="問題数" width="40px">
				<img class="hibiscus1" src="./img/flower_hibiscus.png" alt="問題数" width="40px">
				<img class="hibiscus1" src="./img/flower_hibiscus.png" alt="問題数" width="40px">
				<img class="hibiscus1" src="./img/flower_hibiscus.png" alt="問題数" width="40px">
				<img class="hibiscus1" src="./img/flower_hibiscus.png" alt="問題数" width="40px">
				<img class="hibiscus1" src="./img/flower_hibiscus.png" alt="問題数" width="40px">
				<img class="hibiscus1" src="./img/flower_hibiscus.png" alt="問題数" width="40px">
				<img class="hibiscus2" src="./img/flower_hibiscus.png" alt="問題数" width="40px">
				<img class="hibiscus2" src="./img/flower_hibiscus.png" alt="問題数" width="40px">
				<img class="hibiscus2" src="./img/flower_hibiscus.png" alt="問題数" width="40px">


			</div>


					<br>
				<a href="#" class="cp_btn">前の問題に戻る</a>
				<a href="#" class="cp_btn">次の問題</a>
					<br>
					<br>
		</div>
</div>

<div>
		<div id="quiz_page8" class="quiz">
		　		<br>
			<div class="question">
				<img class="flower" src="./img/quiz8.png" alt="第8問" width="500px">
				<p>地域：{{ $_GET['name'] }}</p>
				<h1><img class="flower" src="./img/flower_hibiscus.png" alt="ハイビスカス" width="40px">{{ $quizzes[1]['miyako_'. $_GET{'name'}] }}<img class="flower" src="./img/flower_hibiscus.png" alt="ハイビスカス" width="40px"></h1>
				<br>
				<br>

				<!-- ↑クイズ -->
				<a class="hint" href="#"><i class="fas fa-lightbulb fa-3x"></i><br><p style="color:black">ヒント</p></a>
				<br>
				<br>
				<!-- ↓四択 -->
				<a href="#" class="btn-flat-dashed-filled">{{ $quizzes[1]['japanese'] }}</a>
					<br>
					<br>
				<a href="#" class="btn-flat-dashed-filled">{{ $quizzes[1]['japanese'] }}</a>
					<br>
					<br>
				<a href="#" class="btn-flat-dashed-filled">{{ $quizzes[1]['japanese'] }}</a>
					<br>
					<br>
				<a href="#" class="btn-flat-dashed-filled">{{ $quizzes[1]['japanese'] }}</a>
					<br>
					<br>
			</div>
			<!-- ハイビスカスを使って問題数を表す -->
			<div class="hibiscus">
				<img class="hibiscus1" src="./img/flower_hibiscus.png" alt="問題数" width="40px">
				<img class="hibiscus1" src="./img/flower_hibiscus.png" alt="問題数" width="40px">
				<img class="hibiscus1" src="./img/flower_hibiscus.png" alt="問題数" width="40px">
				<img class="hibiscus1" src="./img/flower_hibiscus.png" alt="問題数" width="40px">
				<img class="hibiscus1" src="./img/flower_hibiscus.png" alt="問題数" width="40px">
				<img class="hibiscus1" src="./img/flower_hibiscus.png" alt="問題数" width="40px">
				<img class="hibiscus1" src="./img/flower_hibiscus.png" alt="問題数" width="40px">
				<img class="hibiscus1" src="./img/flower_hibiscus.png" alt="問題数" width="40px">
				<img class="hibiscus2" src="./img/flower_hibiscus.png" alt="問題数" width="40px">
				<img class="hibiscus2" src="./img/flower_hibiscus.png" alt="問題数" width="40px">


			</div>


					<br>
				<a href="#" class="cp_btn">前の問題に戻る</a>
				<a href="#" class="cp_btn">次の問題</a>
					<br>
					<br>
		</div>
</div>

<div>
		<div id="quiz_page9" class="quiz">
		　		<br>
			<div class="question">
				<img class="flower" src="./img/quiz9.png" alt="第9問" width="500px">
				<p>地域：{{ $_GET['name'] }}</p>
				<h1><img class="flower" src="./img/flower_hibiscus.png" alt="ハイビスカス" width="40px">{{ $quizzes[1]['miyako_'. $_GET{'name'}] }}<img class="flower" src="./img/flower_hibiscus.png" alt="ハイビスカス" width="40px"></h1>
				<br>
				<br>

				<!-- ↑クイズ -->
				<a class="hint" href="#"><i class="fas fa-lightbulb fa-3x"></i><br><p style="color:black">ヒント</p></a>
				<br>
				<br>
				<!-- ↓四択 -->
				<a href="#" class="btn-flat-dashed-filled">{{ $quizzes[1]['japanese'] }}</a>
					<br>
					<br>
				<a href="#" class="btn-flat-dashed-filled">{{ $quizzes[1]['japanese'] }}</a>
					<br>
					<br>
				<a href="#" class="btn-flat-dashed-filled">{{ $quizzes[1]['japanese'] }}</a>
					<br>
					<br>
				<a href="#" class="btn-flat-dashed-filled">{{ $quizzes[1]['japanese'] }}</a>
					<br>
					<br>
			</div>
			<!-- ハイビスカスを使って問題数を表す -->
			<div class="hibiscus">
				<img class="hibiscus1" src="./img/flower_hibiscus.png" alt="問題数" width="40px">
				<img class="hibiscus1" src="./img/flower_hibiscus.png" alt="問題数" width="40px">
				<img class="hibiscus1" src="./img/flower_hibiscus.png" alt="問題数" width="40px">
				<img class="hibiscus1" src="./img/flower_hibiscus.png" alt="問題数" width="40px">
				<img class="hibiscus1" src="./img/flower_hibiscus.png" alt="問題数" width="40px">
				<img class="hibiscus1" src="./img/flower_hibiscus.png" alt="問題数" width="40px">
				<img class="hibiscus1" src="./img/flower_hibiscus.png" alt="問題数" width="40px">
				<img class="hibiscus1" src="./img/flower_hibiscus.png" alt="問題数" width="40px">
				<img class="hibiscus1" src="./img/flower_hibiscus.png" alt="問題数" width="40px">
				<img class="hibiscus2" src="./img/flower_hibiscus.png" alt="問題数" width="40px">


			</div>


					<br>
				<a href="#" class="cp_btn">前の問題に戻る</a>
				<a href="#" class="cp_btn">次の問題</a>
					<br>
					<br>
		</div>
</div>

<div>
		<div id="quiz_page10" class="quiz">
		　		<br>
			<div class="question">
				<img class="flower" src="./img/quiz10.png" alt="第10問" width="500px">
				<p>地域：{{ $_GET['name'] }}</p>
				<h1><img class="flower" src="./img/flower_hibiscus.png" alt="ハイビスカス" width="40px">{{ $quizzes[1]['miyako_'. $_GET{'name'}] }}<img class="flower" src="./img/flower_hibiscus.png" alt="ハイビスカス" width="40px"></h1>
				<br>
				<br>

				<!-- ↑クイズ -->
				<a class="hint" href="#"><i class="fas fa-lightbulb fa-3x"></i><br><p style="color:black">ヒント</p></a>
				<br>
				<br>
				<!-- ↓四択 -->
				<a href="#" class="btn-flat-dashed-filled">{{ $quizzes[1]['japanese'] }}</a>
					<br>
					<br>
				<a href="#" class="btn-flat-dashed-filled">{{ $quizzes[1]['japanese'] }}</a>
					<br>
					<br>
				<a href="#" class="btn-flat-dashed-filled">{{ $quizzes[1]['japanese'] }}</a>
					<br>
					<br>
				<a href="#" class="btn-flat-dashed-filled">{{ $quizzes[1]['japanese'] }}</a>
					<br>
					<br>
			</div>
			<!-- ハイビスカスを使って問題数を表す -->
			<div class="hibiscus">
				<img class="hibiscus1" src="./img/flower_hibiscus.png" alt="問題数" width="40px">
				<img class="hibiscus1" src="./img/flower_hibiscus.png" alt="問題数" width="40px">
				<img class="hibiscus1" src="./img/flower_hibiscus.png" alt="問題数" width="40px">
				<img class="hibiscus1" src="./img/flower_hibiscus.png" alt="問題数" width="40px">
				<img class="hibiscus1" src="./img/flower_hibiscus.png" alt="問題数" width="40px">
				<img class="hibiscus1" src="./img/flower_hibiscus.png" alt="問題数" width="40px">
				<img class="hibiscus1" src="./img/flower_hibiscus.png" alt="問題数" width="40px">
				<img class="hibiscus1" src="./img/flower_hibiscus.png" alt="問題数" width="40px">
				<img class="hibiscus1" src="./img/flower_hibiscus.png" alt="問題数" width="40px">
				<img class="hibiscus1" src="./img/flower_hibiscus.png" alt="問題数" width="40px">


			</div>


					<br>
				<a href="#" class="cp_btn">前の問題に戻る</a>
				<a href="#" class="cp_btn">結果を見る</a>
					<br>
					<br>
		</div>
</div>


@endsection