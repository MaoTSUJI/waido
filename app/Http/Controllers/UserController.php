<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //

// サインアップ機能
public function signup(){

        return view('auth.signup');
    }

// サインアップチェック画面へ
public function signup_check(){

        return view('auth.signup_check');
    }

// サインアップ完了画面へ
public function signup_thanks(){

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


}
