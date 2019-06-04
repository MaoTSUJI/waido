@extends('layout')

@section('tittle')
Ranking
@endsection

@section('content')
{{-- ここに中身をかく --}}
<body>
	<div>
		<div id="all_ranking" class="ranking container">
		　		<br>
			<div class="ranking">
				<img class="ranking_ribbon" src="./img/ranking.png" alt="ランキング" width="697px">
			</div>
			<div class="ranking">
				<table>
					<tbody>
						<tr>
							<th>
								<p>順位</p>
							</th>
							<th>
								<p>名前</p>
							</th>
							<th>
								<p>動物名</p>
							</th>
							<th>
								<p>動物</p>
							</th>
						</tr>
						<tr>
							<td>
								<img src="./img/no_1.png" alt="1位" width="130px">
							</td>
							<td>
								ガーヒー
							</td>
							<td>
								みゃーくふつ
							</td>
							<td>
								<img src="./img/youkai_hitotsume.png" alt="一つ目小僧" width="100px">
							</td>
						</tr>
						<tr>
							<td>
								<img src="./img/no_2.png" alt="2位" width="120px">
							</td>
							<td>
								TsujiMao
							</td>
							<td>
								ハイビスカス
							</td>
							<td>
								<img src="./img/flower_hibiscus.png" alt="ハイビスカス" width="100px">
							</td>
						</tr>
						<tr>
							<td>
								<img src="./img/no_3.png" alt="3位" width="100px">
							</td>
							<td>
								まさき
							</td>
							<td>
								one
							</td>
							<td>
								<img src="./img/no1.png" alt="one" width="100px">
							</td>
						</tr>
						<tr>
							<td>
								<img src="./img/no4.png" alt="4位" width="80px">
							</td>
							<td>
								Mariko
							</td>
							<td>
								seven
							</td>
							<td>
								<img src="./img/no7.png" alt="seven" width="100px">
							</td>
						</tr>
						<tr>
							<td>
								<img src="./img/no5.png" alt="5位" width="80px">
							</td>
							<td>
								Shinya
							</td>
							<td>
								ミシゲー
							</td>
							<td>
								<img src="./img/mishige.png" alt="しゃもじ" width="100px">
							</td>
						</tr>


						</tr>
					</tbody>
				</table>
			</div>
		</div>

	</div>
@endsection