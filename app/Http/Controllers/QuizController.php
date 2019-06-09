<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;    //Authクラスを使えるようにする
use App\Dialect;
use App\Proverb;
use App\Area;
use App\Title;


class QuizController extends Controller
{
  //一覧画面を表示
	public function home() {

        $cnt = Proverb::count();    //prooverbsテーブルのレコード数を取得
        
        $proverb = Proverb::find(rand(1,$cnt));
        // proverbsテーブルのデータのランダムなレコードを取得

    	// return view('diaries.index', ['diaries' => $diaries]);
    	return view('home',['proverb'=> $proverb]);
        //view(C, [B => A]);
        // Aの変数を、Bの変数名に変えてCのViewに送る
  	}



  	//クイズ地域選択画面
    public function choose(){

        $areas = Area::all();    //areasテーブルのデータを全件取得
    	return view('quizzes.quizlist',['areas'=>$areas]);
    }


    //クイズスタート画面
    public function start(Request $area){

        // dd($area);
        $areas = Area::all();   //areasテーブルのデータを全件取得
        return view('quizzes.quizlist_start',['areas'=>$areas]);
    }

    //問題画面
    public function quiz(Request $area){

        // dd($area);
        $num_quiz = 10;
        $quizzes = Dialect::inRandomOrder()->limit($num_quiz)->get();  //方言データをランダムに並び替えてレコードを10s件取得

        //10問分の問題、答え、選択肢4つを用意
        for($j=0; $j<$num_quiz; $j++){

            $answer[$j] = $quizzes[$j]['japanese'];   //正解を選択肢に格納
            $answer_id[$j] = $quizzes[$j]['id'];

            //同じカテゴリーを持つデータをランダムに5件取得
            $samecategories[$j] = Dialect::where('category_id',$quizzes[$j]['category_id'])->inRandomOrder()->get();

            //問題と同じカテゴリーのidを配列に挿入
            $cnt = count($samecategories[$j]);
            $samecategory_id[$j] = [];
            for($i = 0; $i < $cnt; $i++){
                $samecategory_id[$j][] = $samecategories[$j][$i]['id'];
            }

            $choices_id[$j] = [];    //選択肢の方言idを入れる配列を用意　
            $choices_id[$j][] = $answer_id[$j];    //選択肢配列に答えの方言idを格納

            // 同カテゴリ数中からランダムな数値を抽出
            while(count($choices_id[$j]) < 4){
                // 同カテゴリ数中からランダムな数値を抽出
                $rand = rand(0, $cnt-1);
                //  問題と同じカテゴリー配列が回答と被らないよう配列を作成
                if(in_array($samecategory_id[$j][$rand], $choices_id[$j])){
                        // 選択肢が被った場合、スルー
                }else{
                        // 選択肢が被らなかった場合、idを挿入
                        $choices_id[$j][] = $samecategory_id[$j][$rand];
                }
            }

            shuffle($choices_id[$j]);  //答えが常に最初に来ないように配列をシャッフル
            // dd($answer_id[$j], $choices_id[$j]);

            // 選択肢をidから日本語に返して、配列に格納
            foreach($choices_id[$j] as $choice_id) {
                $choice = $samecategories[$j]->where('id', $choice_id)->first();
                $choices[$j][] = $choice['japanese'];
            }

        }

        // $num = 3;
        // dd($quizzes, $answer, $choices);

        return view('quizzes.quiz_area', ['quizzes' => $quizzes, 'answer' =>$answer, 'choices' =>$choices]);
    }

    public function showarea(Request $area){

        $areas = Area::all()->where('english', $request)->first();   //areasテーブルのデータを全件取得
        $areas = $areas['area'];

        return view('quizzes.quiz_area', ['areas' => $areas ]);

    }

    public function answer(Request $request){


        return view('quizzes.answer');
    }


    //結果表示画面
    public function result(Request $request){

        $correct_num = intval($_POST['correct_num']);

        $titles = Title::all();
        $titles = $titles->where('correct_num', $correct_num)->first();
        $title = $titles['title'];
        $img_url = $titles['img_url'];

        return view('quizzes.result',['correct_num'=>$correct_num , 'title'=>$title, 'img_url'=>$img_url]);
    }
    //ランキング
    public function ranking(){
        return view('ranking');
    }

    //辞書機能
    public function dictionary(){
        return view('dictionary');
    }

    //謝辞
    public function specialthanks(){
        return view('specialthanks');
    }


}
