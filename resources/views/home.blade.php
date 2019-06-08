@extends('layout')

@section('tittle')
Home Page!!
@endsection

@section('content')
	{{-- カルーセル --}}
	<div class="acontainer">
		{{-- カルーセル --}}
		<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
		  <div class="carousel-inner">
		    <div class="carousel-item active">
		      <img src="{{ asset('/img/background/beach1.jpg') }}" class="d-block w-100" alt="...">
		    </div>
		    <div class="carousel-item">
		      <img src="{{ asset('/img/background/beach2.jpg') }}" class="d-block w-100" alt="...">
		    </div>
		    <div class="carousel-item">
		      <img src="{{ asset('/img/background/beach3.jpg') }}" class="d-block w-100" alt="...">
		    </div>
		  </div>
		 {{--  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a> --}}
		</div>
	</div>
	{{-- カルーセル終わり --}}
	<p>{{ $proverb->japanese }}</p>

	{{-- サイト説明 --}}
	<div class="container">
		<h3>みゃーくふつを救え</h3>　
		<img src="./img/logo.png" alt="わいどーロゴ" width="400px">
		<h3>Concept</h3>
		<p>	{{-- わいどーとは、宮古島の方言で「がんばろう」という意味です。<br>
			宮古島の方言は「みゃーくふつ」と呼ばれています。<br>
			しかし、そのみゃーくふつが2009年にユネスコの発表する<a href="http://www.unesco.org/culture/languages-atlas/en/atlasmap/language-id-1973.html">消滅危機言語</a>に指定されてしまいました。<br>
			美しい自然を持つ宮古島の文化の一つであるみゃーくふつ。<br>
			そんな、みゃーくふつを救いたいという思いから、このクイズサイト「わいどー」ができました。<br>
			<br>
			日常会話で用いられる単語を中心に、みゃーくふつを集めました。<br>
			4択のクイズ形式なので、どなたでも気軽にお楽しみいただけます。<br>
			また、SNSでシェアすることで多くの人にみゃーくふつに興味を持ってもらうきっかけになればと思っております。 --}}
			宮古島固有の方言である<br>
			『<strong>みゃーくふつ</strong>』<br>
			は現在その姿を消そうとしている。
			<br>
			<br>
			2009年にユネスコが発表した
			<a href="http://www.unesco.org/culture/languages-atlas/en/atlasmap/language-id-1973.html">消滅危機言語</a>			に指定され<br>
			世界で話されている方言のうち、現在絶滅の危機に面している<br>
			言語の一つとして取り上げられた。
			<br>
			<br>
			この<strong>わいどー</strong>では<br>
			美しい自然の残る宮古島
		
			<br>
			<br>
		</p>
		<div class=container>
			<a href="{{ route('quiz.quizlist') }}" class="cp_btn">Start</a>
			<br>
			<br>
		</div>
	</div>

@endsection