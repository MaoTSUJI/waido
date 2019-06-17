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

        $proverb = Proverb::inRandomOrder()->limit(1)->first();
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

        $areas = Area::all();   //areasテーブルのデータを全件取得

        $num_quiz = 10;
        $dialects = Dialect::inRandomOrder()->limit($num_quiz)->get();
        $id_array = [];
        for($i=0; $i<$num_quiz; $i++){
            $id_array[] = $dialects[$i]['id'];
        }
        shuffle($id_array);
         // dd($id_array);

        return view('quizzes.quizlist_start',['areas'=>$areas, 'id_array'=>$id_array]);
    }

    //問題画面
    public function quiz(Request $request){

        // dd($request);
        $area = $request['area_eng'];   //地域
        $qnum = intval($request['qnum']);   //問題番号
        // dd($qnum);
        //問題表示させる方言id
        $id_num = intval($request['idnum_'.$request['qnum']]);
        // dd($id_num);

        //初期の配列を再読み込み→書き出し
        for($i=0; $i<10; $i++){
            $id_array[] = intval($request['idnum_'.$i]);
        }
        // dd($id_array);

        //正当数
        $correct_num = intval($request['correct_num']);

        $quizzes = Dialect::where('id', $id_num)->first();
        $quiz = $quizzes['miyako_' . $area];
        // $num_quiz = 10;
        // $quizzes = Dialect::inRandomOrder()->limit($num_quiz)->get();  //方言データをランダムに並び替えてレコードを10s件取得

        $answer = $quizzes['japanese'];
        $answer_id = $quizzes['id'];

        //同じカテゴリーを持つデータをランダムに取得
        $samecategories = Dialect::where('category_id',$quizzes['category_id'])->inRandomOrder()->get();

        // dd($samecategories);
        //問題と同じカテゴリーのidを配列に挿入
        $cnt = count($samecategories);

        $samecategory_id = [];
        for($i = 0; $i < $cnt; $i++){
            $samecategory_id[] = $samecategories[$i]['id'];
        }

        $choices_id = [];    //選択肢の方言idを入れる配列を用意　
        $choices_id[] = $answer_id;    //選択肢配列に答えの方言idを格納

        //選択肢4つを用意
        // 同カテゴリ数中からランダムな数値を抽出

        while(count($choices_id) < 4){
            // 同カテゴリ数中からランダムな数値を抽出
            $rand = rand(0, $cnt-1);

            //  問題と同じカテゴリー配列が回答と被らないよう配列を作成
            if(in_array($samecategory_id[$rand], $choices_id)){
                    // 選択肢が被った場合、スルー
            }else{
                    // 選択肢が被らなかった場合、idを挿入
                    $choices_id[] = $samecategory_id[$rand];
            }
        }

        shuffle($choices_id);  //答えが常に最初に来ないように配列をシャッフル

        // 選択肢をidから日本語に返して、配列に格納
        foreach($choices_id as $choice_id) {
            $choice = $samecategories->where('id', $choice_id)->first();
            $choices[] = $choice['japanese'];
        }

        // dd($qnum, $quiz, $answer, $choices, $correct_num);

        return view('quizzes.quiz_area', ['quiz' => $quiz, 'answer' => $answer, 'choices' =>$choices, 'qnum'=>$qnum, 'correct_num'=>$correct_num, 'id_num'=>$id_num, 'id_array'=>$id_array]);
    }



    public function showarea(Request $area){

        $areas = Area::all()->where('english', $request)->first();   //areasテーブルのデータを全件取得
        $areas = $areas['area'];

        return view('quizzes.quiz_area', ['areas' => $areas ]);

    }

    public function answer(Request $request){

        // dd($request);
        $qnum = intval($_POST['qnum']) + 1;
        $quiz = $request['quiz'];
        $answer = $request['answer'];
        $choose_answer = $request['choose_answer'];
        $correct_num = intval($request['correct_num']);

        //初期の配列を再読み込み→書き出し
        for($i=0; $i<10; $i++){
            $id_array[] = intval($request['idnum_'.$i]);
        }
        // dd($id_array);

        // dd($request);
        // dd($qnum, $quiz, $answer, $choose_answer, $correct_num);

        if($answer == $choose_answer){
            $correct_num++;
            $test = 'ok';
        }else{
            $test = 'ng';
        }
        // dd($correct_num, $test);

        return view('quizzes.answer', ['qnum'=>$qnum, 'quiz'=>$quiz, 'answer' =>$answer, 'choose_answer' => $choose_answer, 'correct_num'=>$correct_num, 'id_array'=>$id_array]);
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
