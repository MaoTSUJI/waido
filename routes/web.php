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


//ランキング画面に遷移
Route::get('/ranking/', 'QuizController@ranking')->name('ranking');
//辞書画面に遷移
Route::get('/dictionary/', 'QuizController@dictionary')->name('dictionary');

//ユーザー登録画面に遷移
Route::get('/signup/', 'QuizController@signup')->name('signup');
//ログイン画面に遷移
Route::get('/login/', 'QuizController@login')->name('login');

//サンクス画面に遷移
Route::get('/specialthanks/', 'QuizController@specialthanks')->name('specialthanks');

Route::group(['middleware'=>'auth'], function(){
//ログインした状態じゃないと入れない画面


});