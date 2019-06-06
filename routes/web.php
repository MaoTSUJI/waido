<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//ホーム画面に遷移
Route::get('/', 'QuizController@home')->name('home');
//クイズ画面に遷移
Route::get('/quizlist/', 'QuizController@choose')->name('quiz.quizlist');
//地域選択(クイズをはじめる)画面に遷移
Route::get('/quizlist_start/', 'QuizController@start')->name('quiz.quizlist_start');

//クイズ画面に遷移
Route::get('/quiz_area/', 'QuizController@quiz')->name('quiz.quiz_area');

// 答え画面に遷移
Route::post('/answer/', 'QuizController@answer')->name('quiz.answer');
// Route::match(['post'], '/answer/', 'QuizController@answer');

//選択した地域を画面に表示
// Route::get('/quiz_area/', 'QuizController@showarea')->name('quiz.showarea');

//ランキング画面に遷移
Route::get('/ranking/', 'QuizController@ranking')->name('ranking');
//辞書画面に遷移
Route::get('/dictionary/', 'QuizController@dictionary')->name('dictionary');

//ユーザー登録画面に遷移
Route::get('/signup/', 'UserController@signup')->name('auth.signup');
//ログイン画面に遷移
Route::get('/login/', 'UserController@login')->name('login');

//サンクス画面に遷移
Route::get('/specialthanks/', 'QuizController@specialthanks')->name('specialthanks');

Route::group(['middleware'=>'auth'], function(){
//ログインした状態じゃないと入れない画面
//マイページ画面
Route::get('/mypage/', 'UserController@mypage')->name('mypage');

});

Auth::routes();