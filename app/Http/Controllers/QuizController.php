<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
//Authクラスを使えるようにする

class QuizController extends Controller
{
  //一覧画面を表示
	public function home() {
    	// dd('Hello Laravel');
    	// dump and die関数というLaravelに用意された関数
    	// var_dumpとdieを組み合わせたもの
    	// die関数は、それ以降の動作を無視してまう。
    	// Laravel開発の必須ツールです

        //モデルファイルを使ってデータを取得する
        // $diaries = Diary::with('likes')->orderBy('id', 'desc')->get();
        //SELECT * FROM diaries WHERE 1 を実行し$diariesに入れる
        //all()メソッドは対応するテーブルから、全てのセレクト
        // dd($diaries);

    	// return view('diaries.index', ['diaries' => $diaries]);
    	return view('home');
    	//view関数はresources/view/内にあるファイルを取得する関数
    	//view('ファイル名')もしくは
    	//view('フォルダ名.ファイル名')のように記述する
    	//view('welcome')
    	//view('diaries.edit')
    	//ファイル名は.bladeの前のみ
        //view(C, [B => A]);
        // Aの変数を、Bの変数名に変えてCのViewに送る
  	}

  	//投稿画面
    public function create(){

    	return view('diaries.create');
    }
    //


}
