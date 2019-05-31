@extends('layout')

@section('tittle')
Home Page!!
@endsection

@section('content')
	{{-- カルーセル --}}
	<div class="container">
		<h3>ここにカルーセル</h3>
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

		  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>
	</div>
	{{-- カルーセル終わり --}}

	{{-- サイト説明 --}}
	<div class="container">
		<h3>みゃーくふつを救え　「わいどー」</h3>
		<h3>わいどーとは？</h3>
		<p>	わいどーとは、宮古島方言「みゃーくふつ」の言葉で「がんばろう」という意味です。
		ユネスコに消滅危機言語として指定されたみゃーくふつ
		（参照："<a href="http://www.unesco.org/culture/languages-atlas/en/atlasmap/language-id-1973.html">Atlas of the World’s Languages in Danger</a>"）

		</p>
	</div>

@endsection