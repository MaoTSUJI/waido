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
				<img class="ranking_ribbon" src="./img/ranking.png" alt="ランキング">
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
							<th nowrap>
								<p>総合スコア</p>
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
								604pt
							</td>
							<td>
								キジムナー
							</td>
							<td>
								<img src="./img/kijimuna-.png" alt="キジムナー" width="150px">
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
								486pt
							</td>
							<td>
								ジンベイザメ
							</td>
							<td>
								<img src="./img/jinbeizame.png" alt="ジンベイザメ" width="150px">
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
								438px
							</td>
							<td>
								ジュゴン
							</td>
							<td>
								<img src="./img/dugong.png" alt="ジュゴン" width="150px">
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
								417pt
							</td>
							<td>
								イルカ
							</td>
							<td>
								<img src="./img/dolphin.png" alt="イルカ" width="150px">
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
								395pt
							</td>
							<td>
								ウミガメ
							</td>
							<td>
								<img src="./img/umigame.png" alt="ウミガメ" width="150px">
							</td>
						</tr>


						</tr>
					</tbody>
				</table>
			</div>
		</div>

	</div>
</body>
@endsection