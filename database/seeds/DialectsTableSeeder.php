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
	        	'miyako_nishibe' => 'ヤーニンジュ',
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
        	],
          [
            'japanese' => 'お兄ちゃん',
            'miyako_nishibe' => 'スンジャ',
            'miyako_hirara' => 'アザ',
            'miyako_tarama' => 'アジャー',
            'english' => 'Big-brother',
            'hint' => 'よくケンカします',
          ],
          [
            'japanese' => 'お姉ちゃん',
            'miyako_nishibe' => 'アニィ',
            'miyako_hirara' => 'アンガ',
            'miyako_tarama' => 'ネーネー',
            'english' => 'Big-sister',
            'hint' => 'よくケンカします',
          ],
          [
            'japanese' => '弟',
            'miyako_nishibe' => 'ビッキ',
            'miyako_hirara' => 'ウトゥドゥ',
            'miyako_tarama' => 'ウットゥ',
            'english' => 'Young-brother',
            'hint' => 'うるさいです',
          ],
          [
            'japanese' => '妹',
            'miyako_nishibe' => 'ミイー',
            'miyako_hirara' => 'ウトゥガー',
            'miyako_tarama' => 'ウィトウ',
            'english' => 'Young-sister',
            'hint' => 'うるさいです',
          ],
          [
            'japanese' => '甥、姪',
            'miyako_nishibe' => 'ミュウイ',
            'miyako_hirara' => '',
            'miyako_tarama' => '',
            'english' => 'nephew',
            'hint' => 'かわいいです',
          ],
          [
            'japanese' => '親子',
            'miyako_nishibe' => 'ンザァファ',
            'miyako_hirara' => 'ンマッファ',
            'miyako_tarama' => 'フファンマガ',
            'english' => 'Parent and child',
            'hint' => '大切な関係です',
          ],
          [
            'japanese' => '息子',
            'miyako_nishibe' => 'ビキ',
            'miyako_hirara' => 'ビキウバ',
            'miyako_tarama' => 'フッファ',
            'english' => 'son',
            'hint' => 'キャッチボールしたいです',
          ],
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
