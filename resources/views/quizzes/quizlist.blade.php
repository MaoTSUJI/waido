@extends('layout')

@section('tittle')
QuizList
@endsection

@section('content')
{{-- ここに中身をかく --}}

	<div id="main_box" class="area">
		<div>
			<img class="ribbon" src="img/area_select.png" alt="地域選択" width="500px">

			<div class="map" style="position: relative;">

				<img id="quizmap" class="miyakomap" src=img/miyakomap.png alt="マップ" usemap="#image-map" width="80%" >
				{{-- <map name="image-map">
					<area shape="poly" coords="543,279,542,285,537,290,529,282,522,281,522,285,517,285,508,296,509,308,511,317,511,328,510,336,510,346,506,355,497,370,492,370,485,371,484,376,481,381,476,372,470,376,469,386,472,388,491,392,508,392,537,391,571,393,594,388,621,382,621,379,614,370,606,348,610,340,621,334,616,324,606,315,597,310,593,307,581,298,576,295,573,287,568,282,569,276,560,275,550,277,540,278,540,284,539,293,531,286,526,281,525,281,521,286,518,286,514,288,514,288" href="#" alt="" />
					<area shape="poly" coords="176,561,164,568,155,576,150,583,146,589,143,601,144,609,145,619,147,631,155,639,166,649,177,648,185,652,191,652,206,653,220,652,232,647,242,637,248,631,255,627,259,620,261,603,260,595,257,586,256,582,247,575,240,573,232,569,225,563,218,560,207,559,198,558,189,558,179,561,179,561" href="#" alt="" />
					<area shape="poly" coords="416,58,418,68,419,75,427,79,436,84,441,90,449,92,450,88,447,83,451,83,454,87,459,86,459,78,459,73,453,65,444,60,438,57,434,54,428,51,428,51" href="#" alt="" />
					<area shape="poly" coords="274,239,272,240,270,243,271,248,271,257,276,267,276,273,275,286,274,289,268,290,268,295,268,307,262,307,258,304,254,303,247,298,246,291,243,283,240,279,236,283,236,291,233,293,230,294,230,300,230,308,230,317,231,323,235,329,236,334,236,340,241,345,247,349,247,356,252,362,259,366,269,368,278,372,287,372,294,372,300,367,305,363,307,357,310,354,318,351,325,354,334,360,344,365,352,368,357,368,362,368,371,366,382,366,390,361,395,354,396,345,396,338,396,332,395,321,392,315,385,303,382,291,379,286,378,284,376,278,375,273,363,267,354,261,345,256,335,254,330,249,322,242,316,237,307,237,303,232,295,232,291,229,286,229,281,229,281,229" href="#" alt="" />
					<area shape="poly" coords="504,444,508,452,511,457,515,464,518,473,517,479,516,486,517,493,510,496,504,496,498,499,493,499,493,494,491,490,484,494,482,486,475,480,472,475,472,472,476,467,475,457,472,466,467,473,463,477,461,483,460,488,461,492,467,501,470,511,472,520,475,527,477,534,484,534,489,539,495,547,504,552,513,556,524,562,531,564,539,572,554,578,563,584,580,581,589,579,597,571,615,568,627,558,647,539,660,523,667,506,669,481,669,462,667,459,658,441,645,429,629,424,608,421,590,419,574,418,555,417,530,420,517,424,507,429,500,433,500,437,506,446,511,455,531,450" href="#" alt="" /> --}}

				</map>

					@foreach($areas as $area)
						<div class="link-area{{ strval($area->id) }}">
							<form method="post" name="form1" action="{{ route('quiz.quizlist_start') }}" style="display:inline;">
								@csrf
							  <input type="hidden" name="area_jpn" value="{{ $area->area }}">
							  <input type="hidden" name="area_id" value="{{ $area->id }}">
								<input type="hidden" name="area_eng" value="{{ $area->english }}">
							  <a class="cp_btn" href="javascript:form1[{{ $area->id -1 }}].submit()">{{ $area->area }}周辺</a>
								</form>
						</div>
					@endforeach



			</div>
		</div>
	</div>







@endsection