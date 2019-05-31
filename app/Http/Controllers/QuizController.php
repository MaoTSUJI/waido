<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
//Authクラスを使えるようにする

class QuizController extends Controller
{
  //一覧画面を表示
	public function home() {

    	// return view('diaries.index', ['diaries' => $diaries]);
    	return view('home');
        //view(C, [B => A]);
        // Aの変数を、Bの変数名に変えてCのViewに送る

  	}

  	//クイズ地域選択画面
    public function choose(){

    	return view('quizzes.quizlist');
    }
    //クイズスタート画面
    public function start(){

        return view('quizzes.quizlist_start');
    }

    //問題画面
    public function solve(){

        return view('quizzes.quiz_area1');
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
