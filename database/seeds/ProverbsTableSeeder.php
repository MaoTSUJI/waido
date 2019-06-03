<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;	//DBクラスを使用
use Carbon\Carbon;	//Carbonクラスを使う　日付、時刻の処理をするのに使える

class ProverbsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $user = DB::table('users')->first();

        // array()の省略形[]
        $proverbs = [
        	[
        		'japanese' => '夢中で日を過ごしていれば、いつかは分かる日が来る。',
	        	'english' => 'There is always light behind the clouds.'
        	],
        	[
        		'japanese' => '人生に失敗がないと、人生を失敗する。',
	        	'english' => 'Change before you have to.'
        	],[
        		'japanese' => '人生とは自転車のようなものだ。倒れないようにするには、走らなければならない。',
	        	'english' => 'If you can dream it, you can do it.'
        	]
        ];

        //上記の配列をデータベースに１つずつ挿入
      foreach ($proverbs as $proverb) {
        DB::table('proverbs')->insert([	//INSERT INTO文が実行されている
            'japanese' => $proverb['japanese'],
            'english' => $proverb['english'],
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
      }

    }
}
