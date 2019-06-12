<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;  //Userのクラスを使えるようにする
// use App\Http\Requests\CreateUser; //バリデーションのCreateUsaerを使う

class UserController extends Controller
{
    //

    // サインアップ機能
    public function signup(){

            return view('auth.signup');
        }

    //サインアップチェック画面へ
    public function signup_check(){

            return view('auth.signup_check');
        }

    // サインアップ完了画面へ
    public function signup_thanks(Request $userinfo){

        // dd($userinfo);
        //POSTで受け取ったユーザー情報を取得
        // $name = $userinfo->name;
        // // $email = $userinfo['email'];
        // // $password = $userinfo['password'];
        // dd($name);

        $user = new User(); //Userモデルをインスタンス化

        $user->name = $userinfo->name;  //画面で入力された名前を代入
        $user->email = $userinfo->email;
        $user->password = $userinfo->password;
        $user->save();

            return view('auth.signup_thanks');
        }

    // ログイン機能
    public function login(){

            return view('auth.login');
        }

    // マイページ機能
    public function mypage(){

            return view('auth.mypage');
        }

    // ログアウト機能
    public function logout(){

            return view('/');

        }

    public function verify(){

            return view('verify');

        }

}
