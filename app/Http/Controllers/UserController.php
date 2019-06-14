<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
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

        // dd($userinfo["name"], $userinfo->name);

        // $user["name"]=

        $user->name = $userinfo->name;  //画面で入力された名前を代入
        $user->email = $userinfo->email;
        $user->password = Hash::make($userinfo->password);
        $user->save();

            return view('auth.signup_thanks');
        }

    // ログイン機能
    public function login(){

            return view('auth.login');
        }

    // マイページ機能
    //#1 
    //     public function home() {

    //     $cnt = Proverb::count();    //prooverbsテーブルのレコード数を取得
        
    //     $proverb = Proverb::find(rand(1,$cnt));
    //     // proverbsテーブルのデータのランダムなレコードを取得

    //     // return view('diaries.index', ['diaries' => $diaries]);
    //     return view('home',['proverb'=> $proverb]);
    //     //view(C, [B => A]);
    //     // Aの変数を、Bの変数名に変えてCのViewに送る
    // }

    //#2
        // whereメソッドを使ったパターン
        // $login_user = Auth::user();、user()は組み込み関数？
        // $diaries = Diary::where('user_id',1)->get();->の意味は
        // // where('カラム名',値);
        // SELECT * FROM diaries　WHERE id=1
        // SELECT * FROM diaries　WHERE user_id=1
        // dd($login_user->id);
        // dd($diaries);

        // Modelのリレーションを使ったパターン
        // $login_user = Auth::user();
        // $diaries = $login_user->diaries;
        // dd($diaries);ddの確認

        // return view('diaries.mypage',['diaries'=>$diaries]);

    public function mypage(){
        $userinfo = Auth::user();
        // dd($userinfo);
        $name = $userinfo->name;
        $email = $userinfo->email;
        // dd($user);

        return view('auth.mypage',['name'=>$name,'email'=>$email]);
        //もしくは$name,$emailを消してreturn view('auth.mypage',['userinfo'=>$userinfo]);を使用する

        }

    // ログアウト機能
    public function logout(){

            return view('/');

        }

    public function verify(){

            return view('verify');

        }

}
