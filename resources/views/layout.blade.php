<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>@yield('title')</title>
    {{-- cssへのリンク --}}
    {{-- bootstrap記述するときのリンク --}}
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    {{-- fontawesameの記述 --}}
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
	{{-- ナブバー.cssへのリンク --}}
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
	<link rel="stylesheet" href="/css/navbar.css">
    <link rel="stylesheet" href="/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Kosugi+Maru&display=swap" rel="stylesheet">


</head>
<body>
    {{-- @guest --}}
        {{-- ログインしていない(ゲスト状態)場合の処理 --}}
        
    {{-- @else --}}
        {{-- ログインしている場合の処理 --}}
        {{-- {{ Auth::user()->name }} --}}
    {{-- @endguest --}}

    {{-- navバーを表示 --}}
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
        {{-- ロゴ出力 --}}
            <a class="navbar-brand" href="#">Logo</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <button type="button" class="btn btn-light"><a class="nav-link" href="{{ route('home') }}">ホーム<span class="sr-only">(current)</span></a></button>
                        
                    </li>
                    <li class="nav-item active">
                        <button type="button" class="btn btn-light"><a class="nav-link" href="{{ route('quiz.quizlist') }}">クイズ<span class="sr-only">(current)</span></a></button>
                        
                    </li><li class="nav-item active">
                        <button type="button" class="btn btn-light"><a class="nav-link" href="{{ route('ranking') }}">ランキング<span class="sr-only">(current)</span></a></button>
                        
                    </li><li class="nav-item active">
                        <button type="button" class="btn btn-light"><a class="nav-link" href="{{ route('dictionary') }}">辞書<span class="sr-only">(current)</span></a></button>
                        
                    </li><li class="nav-item active">
                        <button type="button" class="btn btn-light"><a class="nav-link" href="#">ユーザ登録<span class="sr-only">(current)</span></a></button>
                        
                    </li><li class="nav-item active">
                        <button type="button" class="btn btn-light"><a class="nav-link" href="#">ログイン<span class="sr-only">(current)</span></a></button>
                        
                    </li>
                </ul>
            </div>
        </nav>
        
	@yield('content')

    <footer class="footer">
        <ul class="footer__link">
            <li class>
                <a href="" >Language</a>
            </li>

            <li class>
                <a href={{ route('specialthanks') }} >スペシャルサンクス</a>
            </li>
        </ul>

        <a href="http://twitter.com/share?url=http://qiita.com/katsuma"><i class="fab fa-twitter"></i></a>
        <a href="https://www.facebook.com/sharer/sharer.php?u=http://qiita.com/katsuma"><i class="fab fa-facebook-f"></i></a>
        <a href="http://line.me/R/msg/text/?http://qiita.com/katsuma"><i class="fab fa-line"></i></a>

        <p class="pagetop">©2019 M5</p>

    </footer>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script type="text/javascript" src="/js/navbar.js"></script>
</body>
</html>