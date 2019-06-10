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
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif+JP&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Acme&display=swap" rel="stylesheet">



</head>
<body>
    {{-- @guest --}}
        {{-- ログインしていない(ゲスト状態)場合の処理 --}}

    {{-- @else --}}
        {{-- ログインしている場合の処理 --}}
        {{-- {{ Auth::user()->name }} --}}
    {{-- @endguest --}}

    {{-- navバーを表示 --}}
    <div>
            <nav class="navbar fixed-top navbar-expand-md flex-nowrap navbar-new-top">
                <a href="/" class="navbar-brand"><img src="./img/logo.png" alt="わいどーロゴ" height="50px" /></a>
                <ul class="nav navbar-nav mr-auto"></ul>
                <ul class="navbar-nav flex-row">
                    <li class="nav-item">
                        <a class="nav-link px-2" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-2" href="{{ route('quiz.quizlist') }}">Quiz</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-2" href="{{ route('ranking') }}">Ranking</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-2" href="{{ route('dictionary') }}">List</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-2" href="{{ route('auth.signup') }}">Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-2" href="{{ route('login') }}">Login</a>
                    </li>
                </ul>
                <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbar2">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </nav>
    </div>

    {{-- ここに各ページのボディを表示 --}}
    @yield('content')


    {{-- <footer class="footer">
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

        <p class="pagetop">©2019 M5</p> --}}

    <div class="bottom section-padding">
        <div class="acontainer">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="copyright">
                        <p>© 2019 <span>わいどー</span></a> All rights reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </footer>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script type="text/javascript" src="/js/navbar.js"></script>
</body>
</html>