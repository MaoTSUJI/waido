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
    <link rel="stylesheet" href="/css/quiz.css">
    <link rel="stylesheet" href="/css/quizlist.css">
    <link rel="stylesheet" href="/css/ranking.css">

    <link href="https://fonts.googleapis.com/css?family=Kosugi+Maru&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif+JP&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Acme&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kosugi+Maru&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif+JP&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Permanent+Marker&display=swap" rel="stylesheet">
    {{-- MAPのレスポンシブ --}}
    {{-- <script src="/js/jquery-3.4.1.min.js"></script> --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="/js/jquery.rwdImageMaps.js"></script>
    {{-- <script src="/js/jquery.rwdImageMaps.min.js"></script> --}}

    <script>
        $(document).ready(function(e) {
            $('#quizmap').rwdImageMaps();
        });
    </script>

</head>
<body>
    @guest
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
                        <a class="nav-link px-2" href="{{ route('register') }}">Register</a>
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

    @else
        {{-- ログインしている場合の処理 --}}
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
                        <a class="nav-link px-2" href="{{ route('mypage') }}">My page</a>
                    </li>
                    <li class="nav-item dropdown" style="list-style: none;">
                            <a id="navbarDropdown" class="nav-link px-2 dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" style="padding: 0;">
                            <a class="dropdown-item" style="background-color:#444444;margin: 0;"href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                </ul>
                <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbar2">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </nav>
        </div>
    @endguest

    @guest
        {{-- <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
        </li>
        @if (Route::has('register'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>
        @endif --}}
    @else
        {{-- <li class="nav-item" style="list-style: none;">
        <a class="nav-link px-2" href="/mypage">My page</a>
        </li> --}}
       {{--  <li class="nav-item dropdown" style="list-style: none;">
            <a id="navbarDropdown" class="nav-link px-2 dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }}
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </li> --}}
    @endguest
   {{--          </nav>
    </div> --}}

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
    <img src="./img/sisaright.png" alt="シーサー" class="cute">
    <img src="./img/sisaleft.png" alt="シーサー" class="cute1">
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