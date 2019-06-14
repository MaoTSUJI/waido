@extends('layout')

    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="/css/list.css">

@section('tittle')
QuizList
@endsection

@section('content')
{{-- <html lang="en">
<head>
  <title>Folder Library concept</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body> --}}


<body>
  <div>
    <div id="all_ranking" class="ranking container">
      {{-- コピー開始 --}}
    <div id="wrapper" style="width: 100%;">
    <div class="left">

      <div class="top-droppable folder tooltiper tooltiper-up" data-tooltip="0 file" id="folder">
        <i class="fa fa-check" aria-hidden="true"></i>
        <h1 class="aisatu">挨拶</h1>
          <p class="folder-text">
            higa house<br>
            幹樹<br>
            mizuki<br>
            serina<br>
            yuko<br>
            kenei<br>
        　</p>
      </div>


      <div class="top-droppable folder tooltiper tooltiper-up" data-tooltip="0 file" id="folder">
        <i class="fa fa-check" aria-hidden="true"></i>
        <h1>食べ物</h1>
        <p class="folder-text1">
          ゴーヤー<br>
          スパム<br>
          島唐辛子<br>
          油味噌<br>
          ジューシー<br>
        </p>
      </div>

      <div class="top-droppable folder tooltiper tooltiper-up" data-tooltip="0 file" id="folder">
        <i class="fa fa-check" aria-hidden="true"></i>
        <h1>家族</h1>
        <p class="folder-text2">
          mother<br>
          father<br>
          sister<br>
          brother<br>
          grandfather<br>
        </p>
      </div>

      <div class="top-droppable folder tooltiper tooltiper-up" data-tooltip="0 file" id="folder">
        <i class="fa fa-check" aria-hidden="true"></i>
        <p class="folder-text3">Folder 4ももおももももももももおおおおおおおおおおおおおおおおおおおおおおおおお</p>
      </div>

      <div class="top-droppable folder tooltiper tooltiper-up" data-tooltip="0 file" id="folder">
        <i class="fa fa-check" aria-hidden="true"></i>
        <p class=folder-text4>ううううううううううううううううううううううううううううううううううううううううううううう</p>
      </div>

      <div class="top-droppable folder tooltiper tooltiper-up" data-tooltip="0 file" id="folder">
        <i class="fa fa-check" aria-hidden="true"></i>
        <p class=folder-text5>ううううううううううううううううううううううううううううううううううううううううううううう</p>
      </div>

    </div>

 {{--  <div class="top-droppable folder-content easeout2 closed" id="folder1-content">
    <div class="close-folder-content"><i class="fa fa-times" aria-hidden="true"></i></div>
    <h2><i class="fa fa-folder" aria-hidden="true"></i><span>Folder 1</span></h2>
  </div>

  <div class="top-droppable folder-content easeout2 closed" id="folder2-content">
    <div class="close-folder-content"><i class="fa fa-times" aria-hidden="true"></i></div>
    <h2><i class="fa fa-folder" aria-hidden="true"></i><span>Folder 2</span></h2>
  </div>

  <div class="top-droppable folder-content easeout2 closed" id="folder3-content">
    <div class="close-folder-content"><i class="fa fa-times" aria-hidden="true"></i></div>
    <h2><i class="fa fa-folder" aria-hidden="true"></i><span>Folder 3</span></h2>
  </div>

  <div class="top-droppable folder-content easeout2 closed" id="folder4-content">
    <div class="close-folder-content"><i class="fa fa-times" aria-hidden="true"></i></div>
    <h2><i class="fa fa-folder" aria-hidden="true"></i><span>Folder 4</span></h2>
  </div>

  <div class="top-droppable folder-content easeout2 closed" id="folder5-content">
    <div class="close-folder-content"><i class="fa fa-times" aria-hidden="true"></i></div>
    <h2><i class="fa fa-folder" aria-hidden="true"></i><span>Folder 5</span></h2>
  </div>
</div> --}}


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
      {{-- コピー終了 --}}
    </div>
  </div>


{{-- <div id="wrapper" style="width: 100%;">
    <div class="left">
      <div class="top-droppable folder tooltiper tooltiper-up" data-tooltip="0 file" id="folder1"><i class="fa fa-folder" aria-hidden="true"></i><i class="fa fa-check" aria-hidden="true"></i><p>Folder 1</p></div>
      <div class="top-droppable folder tooltiper tooltiper-up" data-tooltip="0 file" id="folder2"><i class="fa fa-folder" aria-hidden="true"></i><i class="fa fa-check" aria-hidden="true"></i><p>Folder 2</p></div>
      <div class="top-droppable folder tooltiper tooltiper-up" data-tooltip="0 file" id="folder3"><i class="fa fa-folder" aria-hidden="true"></i><i class="fa fa-check" aria-hidden="true"></i><p>Folder 3</p></div>
      <div class="top-droppable folder tooltiper tooltiper-up" data-tooltip="0 file" id="folder4"><i class="fa fa-folder" aria-hidden="true"></i><i class="fa fa-check" aria-hidden="true"></i><p>Folder 4</p></div>
      <div class="top-droppable folder tooltiper tooltiper-up" data-tooltip="0 file" id="folder5"><i class="fa fa-folder" aria-hidden="true"></i><i class="fa fa-check" aria-hidden="true"></i><p>Folder 5</p></div>
    </div>

  <div class="top-droppable folder-content easeout2 closed" id="folder1-content">
    <div class="close-folder-content"><i class="fa fa-times" aria-hidden="true"></i></div>
    <h2><i class="fa fa-folder" aria-hidden="true"></i><span>Folder 1</span></h2>
  </div>
  
  <div class="top-droppable folder-content easeout2 closed" id="folder2-content">
    <div class="close-folder-content"><i class="fa fa-times" aria-hidden="true"></i></div>
    <h2><i class="fa fa-folder" aria-hidden="true"></i><span>Folder 2</span></h2>
  </div>
  
  <div class="top-droppable folder-content easeout2 closed" id="folder3-content">
    <div class="close-folder-content"><i class="fa fa-times" aria-hidden="true"></i></div>
    <h2><i class="fa fa-folder" aria-hidden="true"></i><span>Folder 3</span></h2>
  </div>
  
  <div class="top-droppable folder-content easeout2 closed" id="folder4-content">
    <div class="close-folder-content"><i class="fa fa-times" aria-hidden="true"></i></div>
    <h2><i class="fa fa-folder" aria-hidden="true"></i><span>Folder 4</span></h2>
  </div>
  
  <div class="top-droppable folder-content easeout2 closed" id="folder5-content">
    <div class="close-folder-content"><i class="fa fa-times" aria-hidden="true"></i></div>
    <h2><i class="fa fa-folder" aria-hidden="true"></i><span>Folder 5</span></h2>
  </div>
</div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>  --}}
 </body>
</html> 

{{-- ここに中身をかく --}}


@endsection