<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;	//DBクラスを使用
use Carbon\Carbon;

class DialectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    		$category = DB::table('categories')->first();

        // array()の省略形[]
        $dialects = [
        	[
        		'japanese' => '家族',
	        	'miyako_nishibe' => 'ヤーニンジュ
	        	',
	        	'miyako_hirara' => 'ヤーディ',
	        	'miyako_tarama' => 'ヤーティーンナ',
	        	'english' => 'family',
	        	'hint' => '大切なものです',
        	],
        	[
        		'japanese' => 'おじいちゃん',
	        	'miyako_nishibe' => 'シュー',
	        	'miyako_hirara' => 'シュウ',
	        	'miyako_tarama' => 'シュー',
	        	'english' => 'grandfather',
	        	'hint' => 'おこづかいをくれます',
        	],
        	[
        		'japanese' => 'おばあちゃん',
	        	'miyako_nishibe' => 'アンナ',
	        	'miyako_hirara' => 'ンマ',
	        	'miyako_tarama' => 'アンナ',
	        	'english' => 'grandmather',
	        	'hint' => 'おこづかいをくれます',
        	],
        	[
        		'japanese' => 'お父さん',
	        	'miyako_nishibe' => 'ンッザ',
	        	'miyako_hirara' => 'ウヤ',
	        	'miyako_tarama' => 'ウヤーシャ',
	        	'english' => 'father',
	        	'hint' => '大黒柱です',
        	],
        	[
        		'japanese' => 'お母さん',
	        	'miyako_nishibe' => 'ンマー',
	        	'miyako_hirara' => 'アンマ',
	        	'miyako_tarama' => 'アンナー',
	        	'english' => 'mother',
	        	'hint' => '強しです',
        	]
        ];

      foreach ($dialects as $dialect) {
      	DB::table('dialects')->insert([ //INSERT INTO文が実行されている
      		'japanese' => $dialect['japanese'],
      		'miyako_nishibe' => $dialect['miyako_nishibe'],
      		'miyako_hirara' => $dialect['miyako_hirara'],
      		'miyako_tarama' => $dialect['miyako_tarama'],
      		'english' => $dialect['english'],
      		'hint' => $dialect['hint'],
          'category_id' => $category->id,
      		'created_at' => Carbon::now(),
      		'updated_at' => Carbon::now()
      	]);

      }


    }
}
