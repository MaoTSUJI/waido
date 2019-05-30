<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>@yield('title')</title>
    {{-- cssへのリンク --}}
	<link rel="stylesheet" type="text/css" href="/css/app.css">
    {{-- bootstrap記述するときのリンク --}}
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    {{-- fontawesameの記述 --}}
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
	{{-- ナブバー.cssへのリンク --}}
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
	<link rel="stylesheet" href="/css/navbar.css">
</head>
<body>
    @guest
        {{-- ログインしていない(ゲスト状態)場合の処理 --}}
        
    @else
        {{-- ログインしている場合の処理 --}}
        {{-- {{ Auth::user()->name }} --}}
    @endguest

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
                         <a class="nav-link" href="#">ホーム <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">クイズ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" >ランキング</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" >辞書</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" >ユーザ登録</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#" >ログイン</a>
                    </li>
                </ul>
            </div>

        </nav>
	@yield('content')

    <footer class="footer">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="#" >Language</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#" >スペシャルサンクス</a>
            </li>
        </ul>
        <p>©2019 M5</p>

    </footer>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script type="text/javascript" src="/js/navbar.js"></script>
</body>
</html>