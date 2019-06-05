<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //

// サインアップ機能
public function signup(){

        return view('signup');
    }

// ログイン機能
public function login(){

        return view('login');
    }

// マイページ機能
public function mypage(){

        return view('mypage');
    }


}
