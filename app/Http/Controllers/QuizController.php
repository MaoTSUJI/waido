<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;    //Authクラスを使えるようにする
use App\Dialect;  //  App/Quizクラスを使用する宣言
use App\Proverb;  //  App/Proverbクラスを使用する宣言
use App\Area;   //Areaクラスを使用


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
    public function start(){

        return view('quizzes.quizlist_start');
    }

    //問題画面
    public function quiz(){

        $quizzes = Dialect::inRandomOrder()->limit(5)->get();  //方言データをランダムに並び替えてレコードを5件取得

        $answer = $quizzes[1]['japanese'];   //正解を選択肢に格納
        $answer_id = $quizzes[1]['id'];

        // dd($quizzes[3]['id']);

        //同じカテゴリーを持つデータをランダムに5件取得
        $samecategories = Dialect::where('category_id',$quizzes[1]['category_id'])->inRandomOrder()->get();

        //問題と同じカテゴリーのidを配列に挿入
        $cnt = count($samecategories);
        for($i = 0; $i < $cnt; $i++){
            $samecategory_id[] = $samecategories[$i]['id'];
        }

        $choices[] = $answer_id;    //選択肢配列に答えを格納
        $rand = rand(0, $cnt-1);   //ランダムな数値を変数にセット

        // 選択肢idを4つ並べた配列を作成
        while(count($choices) < 4){
            $rand = rand(0, $cnt-1);   //ランダムな数値を変数にセット
            //  問題と同じカテゴリー配列が回答と被らないよう配列を作成
            if(in_array($samecategory_id[$rand], $choices)){

            }else{
                // 選択肢が被らなかった場合、idを挿入
                $choices[] = $samecategory_id[$rand];
            }
        }

        shuffle($choices);  //配列をシャッフル
        dd($answer_id, $choices);



        // for(){
        //     if($quizzes[3]['id'] == $answer_wrong['id']){
        //      $test = 'true';
        //     }else{
        //     $test = 'false';
        //     }
        // }

        // dd($test);


        return view('quizzes.quiz_area', ['quizzes' => $quizzes ]);
    }

    public function answer(){

        $answer = Dialect::find(1);

        return view('quizzes.quiz_area', ['answer' => $answer]);
    }


    //結果表示画面
    public function result(){
        return view('quizzes.result');
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
